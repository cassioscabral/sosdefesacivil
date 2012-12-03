(function($) {
    $.fn.sic = function(orgao){
        
        if(orgao != null) {
        
            $_self = this;
            jQuery.ajax({
                url: 'http://paraiba.pb.gov.br/ecosistema/sic/orgao/contatoAjax/id/'+orgao,
                dataType : 'html',
                crossDomain: true,
                jsonp: false,
                jsonpCallback: 'callbacksic',
                success: function(dados){
                    $_self.html(dados);
                }
            });
        } else {
            console.log('Órgão não atribuido. Consulte a tabela de órgãos em "http://paraiba.pb.gov.br/ecosistema/sic/ajuda"');
        }
    } 
})(jQuery);