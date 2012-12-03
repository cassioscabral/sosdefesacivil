<?php

/**
 * This is the model class for table "ocorrencia".
 *
 * The followings are the available columns in table 'ocorrencia':
 * @property integer $id
 * @property string $data_hora
 * @property integer $protocolo
 * @property string $solicitante
 * @property string $apelido
 * @property string $usuario_id
 * @property string $endereco
 * @property string $numero
 * @property string $complemento
 * @property string $localidade
 * @property string $bairro
 * @property string $referencia
 * @property string $fone1
 * @property string $fone2
 * @property string $obs
 *
 * The followings are the available model relations:
 * @property Usuario $usuario
 * @property OcorrenciaTipo[] $ocorrenciaTipos
 */
class Ocorrencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ocorrencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ocorrencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_id', 'required'),
			array('protocolo', 'numerical', 'integerOnly'=>true),
			array('data_hora, solicitante, apelido, numero, complemento, localidade, fone1, fone2', 'length', 'max'=>45),
			array('usuario_id', 'length', 'max'=>11),
			array('endereco, bairro, referencia', 'length', 'max'=>255),
			array('obs', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, data_hora, protocolo, solicitante, apelido, usuario_id, endereco, numero, complemento, localidade, bairro, referencia, fone1, fone2, obs', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id'),
			'ocorrenciaTipos' => array(self::HAS_MANY, 'OcorrenciaTipo', 'ocorrencia_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'data_hora' => 'Data Hora',
			'protocolo' => 'Protocolo',
			'solicitante' => 'Solicitante',
			'apelido' => 'Apelido',
			'usuario_id' => 'Usuario',
			'endereco' => 'Endereco',
			'numero' => 'Numero',
			'complemento' => 'Complemento',
			'localidade' => 'Localidade',
			'bairro' => 'Bairro',
			'referencia' => 'Referencia',
			'fone1' => 'Fone1',
			'fone2' => 'Fone2',
			'obs' => 'Obs',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('data_hora',$this->data_hora,true);
		$criteria->compare('protocolo',$this->protocolo);
		$criteria->compare('solicitante',$this->solicitante,true);
		$criteria->compare('apelido',$this->apelido,true);
		$criteria->compare('usuario_id',$this->usuario_id,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('localidade',$this->localidade,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('referencia',$this->referencia,true);
		$criteria->compare('fone1',$this->fone1,true);
		$criteria->compare('fone2',$this->fone2,true);
		$criteria->compare('obs',$this->obs,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}