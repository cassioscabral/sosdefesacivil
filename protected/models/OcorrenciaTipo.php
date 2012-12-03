<?php

/**
 * This is the model class for table "ocorrencia_tipo".
 *
 * The followings are the available columns in table 'ocorrencia_tipo':
 * @property integer $ocorrencia_id
 * @property integer $tipo_id
 *
 * The followings are the available model relations:
 * @property Ocorrencia $ocorrencia
 * @property Tipo $tipo
 */
class OcorrenciaTipo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OcorrenciaTipo the static model class
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
		return 'ocorrencia_tipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ocorrencia_id, tipo_id', 'required'),
			array('ocorrencia_id, tipo_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ocorrencia_id, tipo_id', 'safe', 'on'=>'search'),
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
			'ocorrencia' => array(self::BELONGS_TO, 'Ocorrencia', 'ocorrencia_id'),
			'tipo' => array(self::BELONGS_TO, 'Tipo', 'tipo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ocorrencia_id' => 'Ocorrencia',
			'tipo_id' => 'Tipo',
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

		$criteria->compare('ocorrencia_id',$this->ocorrencia_id);
		$criteria->compare('tipo_id',$this->tipo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}