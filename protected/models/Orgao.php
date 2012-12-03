<?php

/**
 * This is the model class for table "orgao".
 *
 * The followings are the available columns in table 'orgao':
 * @property integer $id
 * @property integer $cidade
 * @property string $nome
 * @property string $imagem
 * @property string $logradouro
 * @property string $telefone
 * @property string $cep
 * @property string $data_cadastro
 * @property string $bairro
 * @property string $estado
 * @property string $responsavel
 *
 * The followings are the available model relations:
 * @property Faq[] $faqs
 */
class Orgao extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Orgao the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sic_orgao';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('cep, logradouro, telefone, nome, bairro, cidade, estado, responsavel', 'required'),
            array('nome', 'length', 'max' => 100),
            array('imagem, responsavel', 'length', 'max' => 200),
            array('telefone', 'length', 'max' => 255),
            array('cep', 'length', 'max' => 20),
            array('bairro, cidade', 'length', 'max' => 255),
            array('estado', 'length', 'max' => 2),
            array('logradouro', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, cidade, nome, imagem, logradouro, telefone, cep, data_cadastro, bairro, estado, responsavel', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'faqs' => array(self::HAS_MANY, 'Faq', 'orgao_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'nome' => 'Nome',
            'imagem' => 'Imagem',
            'logradouro' => 'Logradouro',
            'telefone' => 'Telefone',
            'cep' => 'Cep',
            'data_cadastro' => 'Data Cadastro',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'responsavel' => 'Responsável',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('cidade', $this->cidade);
        $criteria->compare('nome', $this->nome, true);
        $criteria->compare('imagem', $this->imagem, true);
        $criteria->compare('logradouro', $this->logradouro, true);
        $criteria->compare('telefone', $this->telefone, true);
        $criteria->compare('cep', $this->cep, true);
        $criteria->compare('data_cadastro', $this->data_cadastro, true);
        $criteria->compare('bairro', $this->bairro, true);
        $criteria->compare('cidade', $this->cidade, true);
        $criteria->compare('estado', $this->estado, true);
        $criteria->compare('responsavel', $this->responsavel, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function beforeValidate() {
        parent::beforeValidate();

        if ($this->isNewRecord) {
            if (!U::validate(array("sic"))) {
                $this->orgao_id = Yii::app()->user->objeto->orgao->id;
            }
        }
        return true;
    }

}