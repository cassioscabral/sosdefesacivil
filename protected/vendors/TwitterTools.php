<?php
/* ***************************************************************
 * TwitterTools 
 * v. 2.1 - 14/10/2010
 * by @erikaheidi
 * http://www.erikafocke.com.br/twittertools
 *****************************************************************/

class TwitterTools{
	
	/* Bit.ly info ! 
	 * register here: http://www.bit.ly/account/register?rd=/
	 * api key: http://bit.ly/account/your_api_key/
	 */
	static $bl_login = "generictest";
	static $bl_apikey = "R_08f8a800201f625589a37f057197fa69";
	
	var $consumer_key;
	var	$consumer_secret;

	var $atoken;
	var $atoken_secret;
	
	var $rtoken;
	var $rtoken_secret;
	
	var $state;
	
	/* __construct
	 * $consumer_key = twitter app consumer key
	 * $consumer_secret = twitter app consumer secret
	 */
	function __construct($consumer_key,$consumer_secret,$atoken=0,$atoken_secret=0)
	{
		$this->consumer_key = $consumer_key;
		$this->consumer_secret = $consumer_secret;
		$this->state = 0;
		
		if($atoken AND $atoken_secret)
		{
			$this->atoken = $atoken;
			$this->atoken_secret = $atoken_secret;
		}
		else
		{
			$tokens = unserialize($_SESSION['tokens']);
			$tokens_secrets = unserialize($_SESSION['tokens_secrets']);
			
			if(!empty($_SESSION['oauth_access_token']))
			{
				//logged
				$this->state = 2;
				$this->atoken =  $_SESSION['oauth_access_token'];
				$this->atoken_secret =  $_SESSION['oauth_access_token_secret'];
			}
			else
			{			
				if(!empty($_REQUEST['oauth_token']))
				{
					$key = array_search($_REQUEST['oauth_token'],$tokens);
					
					if($key !== false)
					{
						$this->rtoken = $_REQUEST['oauth_token'];
						$this->rtoken_secret = $tokens_secrets[$key];
					
						if(!$this->state)
						{
							//returned
							$this->state = 1;
							$this->getAccessToken();
						}
					}
					
				}
				else
				{					
					$to = new TwitterOAuth($this->consumer_key, $this->consumer_secret);
					$tok = $to->getRequestToken();
					$this->rtoken = $rtoken = $tok['oauth_token'];
					$this->rtoken_secret = $rtoken_secret = $tok['oauth_token_secret'];
					
					$tokens[] = $rtoken;
					$tokens_secrets[] = $rtoken_secret;
					
					$_SESSION['tokens'] = serialize($tokens);
					$_SESSION['tokens_secrets'] = serialize($tokens_secrets);
				}
			
			}
			
		}
	}
	
	// for compatibility with old version (deprecated method)
	function checkState()
	{
		$state = 'start';
		if($state == 1)
			$state = 'returned';
		elseif($state == 2)
			$state = 'logged';
			
		return $state;
	}
	
	function getAuthLink()
	{
		$to = new TwitterOAuth($this->consumer_key, $this->consumer_secret);
		return $to->getAuthorizeURL($this->rtoken);
	}
	
	function getAccessToken()
	{
		$to = new TwitterOAuth($this->consumer_key, $this->consumer_secret, $this->rtoken, $this->rtoken_secret);			 
		$tok = $to->getAccessToken();
		$_SESSION['oauth_access_token'] = $this->atoken = $tok['oauth_token'];
		$_SESSION['oauth_access_token_secret'] = $this->atoken_secret = $tok['oauth_token_secret'];
	}
	
	/*
	 * shortcut for checking user state
	 */ 
	function logged()
	{
		return $this->state;
	}
	
	/*
	 * get user credentials
	 * return
	 */ 
	function getCredentials()
	{
		$user = $this->makeRequest('http://api.twitter.com/account/verify_credentials.xml');
		if($user)
			return simplexml_load_string($user);
	}

	function sendWithOAuth($msg,$replyto=NULL)
	{		
		$message= strip_tags($msg);
		
		$pos = strpos($message,"http://");
		if ($pos !== false) 
		{
			$aux = substr($message,$pos);
			$split = explode(" ",$aux);
			$theUrl = $split[0];
			$small = $this->getSmallLink($theUrl);
			$message= str_replace($theUrl,$small,$message);			
		}
		$message = substr($message,0,140);
			
		
		return $this->makeRequest('http://api.twitter.com/statuses/update.xml', array('status' => $message, 'in_reply_to_status_id' => $replyto), 'POST');
	}
	
	function RT($id)
	{				
		return $this->makeRequest('http://api.twitter.com/statuses/retweet/' . $id . '.xml',  null, 'POST');
	}
	
	function favorite($id, $action = 'create')
	{				
		return $this->makeRequest('http://api.twitter.com/favorites/'. $action .'/' . $id . '.xml', null, 'POST');
	}
	
	
	//bit.ly
	function getSmallLink($longurl) 
	{	
		$login = self::$bl_login;
		$apiKey = self::$bl_apikey;
		$url = "http://api.bit.ly/shorten?version=2.0.1&longUrl=$longurl&login=$login&apiKey=$apiKey&format=json&history=1";
		$result = file_get_contents($url);
		$obj = json_decode($result, true);
		$link = $obj ["results"] ["$longurl"] ["shortUrl"];
		if(empty($link))
			return $longurl;
		else
			return $link;
	}

	function follow($to)
	{
		return $this->makeRequest('http://api.twitter.com/1/friendships/create.xml', array("screen_name"=>$to), 'POST');
	}
	
	function getTimeline($limit=10)
	{	
		$ret= $this->makeRequest('http://api.twitter.com/1/statuses/home_timeline.xml',array("count"=>$limit));		
		if($ret)
		{
			$all = simplexml_load_string($ret);
			return $all->status;
		}
	}
	
	function getMentions($limit=10)
	{	
		$ret = $this->makeRequest('http://api.twitter.com/1/statuses/mentions.xml',array("include_rts"=>1,"count"=>$limit));
		if($ret)
		{			
			$all = simplexml_load_string($ret);
			return $all->status;
		}
	}
	
	function getRetweets($limit=10)
	{	
		$ret = $this->makeRequest('http://api.twitter.com/1/statuses/retweets_of_me.xml',array("include_entities"=>"true","count"=>$limit));
		if($ret)
		{			
			$all = simplexml_load_string($ret);
			print_r($all);
			return $all->status;
		}
	}
	
	function getDms($limit=10)
	{

		$ret = $this->makeRequest('http://api.twitter.com/1/direct_messages.xml',array("cursor"=>$limit));
		if($ret)
		{
			$all = simplexml_load_string($ret);
			return $all->direct_message;
		}
	}
	
	function getFollowers($screen_name,$cursor=0)
	{
		if(!$cursor)
			$cursor = "-1";
			
		$ret= $this->makeRequest('http://api.twitter.com/1/statuses/followers.xml',array("screen_name"=>$screen_name,"cursor"=>$cursor));		
		if($ret)
		{
			$all = simplexml_load_string($ret);
			return $all->users->user;
		}
	}
		
	function getFriends($screen_name,$cursor=0)
	{
		if(!$cursor)
			$cursor = "-1";
			
		$ret= $this->makeRequest('http://api.twitter.com/1/statuses/friends.xml',array("screen_name"=>$screen_name,"cursor"=>$cursor));		
		if($ret)
		{
			$all = simplexml_load_string($ret);
			return $all->users->user;
		}
	}
	
	function search($query,$limit=30)
	{	
		$ret = $this->makeRequest('http://search.twitter.com/search.json',array("show_user"=>"true","q"=>$query));
		if($ret)
		{			
			$all = json_decode($ret,true);
			return $all['results'];
		}
	}
	
	function getUsersInfo($lista_users)
	{
		$ret = $this->makeRequest('http://api.twitter.com/1/users/lookup.xml',array("user_id"=>$lista_users));
		if($ret)
		{
			$all = simplexml_load_string($ret);
			return $all->user;
		}		
	}
	
	function makeRequest($api_url,$args=null,$method='GET')
	{
		$twitter = new TwitterOAuth($this->consumer_key, $this->consumer_secret, $this->atoken, $this->atoken_secret);
		
		return $twitter->OAuthRequest($api_url,$args,$method);
	}
}


?>
