<?php

/**
 * This is the model class for table "senha".
 *
 * The followings are the available columns in table 'senha':
 * @property integer $id
 * @property string $descricao
 * @property string $login
 * @property string $senha
 * @property string $obs
 * @property string $data_cadastro
 * @property string $data_atualizado
 * @property integer $usuario_id
 *
 * The followings are the available model relations:
 * @property Usuario $usuario
 */
class Senha extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Senha the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'senha';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('usuario_id', 'required'),
            array('usuario_id', 'numerical', 'integerOnly' => true),
            array('descricao', 'length', 'max' => 255),
            array('login, senha', 'length', 'max' => 45),
            array('obs, data_cadastro, data_atualizado', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, descricao, login, senha, obs, data_cadastro, data_atualizado, usuario_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'descricao' => 'Descricao',
            'login' => 'Login',
            'senha' => 'Senha',
            'obs' => 'Obs',
            'data_cadastro' => 'Data Cadastro',
            'data_atualizado' => 'Data Atualizado',
            'usuario_id' => 'Usuario',
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
        $criteria->compare('descricao', $this->descricao, true);
        $criteria->compare('login', $this->login, true);
        $criteria->compare('senha', $this->senha, true);
        $criteria->compare('obs', $this->obs, true);
        $criteria->compare('data_cadastro', $this->data_cadastro, true);
        $criteria->compare('data_atualizado', $this->data_atualizado, true);
        $criteria->compare('usuario_id', $this->usuario_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function beforeValidate() {
        parent::beforeValidate();

        $this->usuario_id = Yii::app()->user->id;
        $this->data_cadastro = date('dd/mm/yy');

        return true;
    }

}