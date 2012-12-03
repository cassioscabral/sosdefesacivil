<?php

/**
 * This is the model class for table "preferencia".
 *
 * The followings are the available columns in table 'preferencia':
 * @property integer $id
 * @property integer $usuario_id
 * @property string $imagem1
 * @property string $imagem2
 * @property string $imagem3
 * @property string $cor1
 * @property string $cor2
 * @property string $cor3
 *
 * The followings are the available model relations:
 * @property Usuario $usuario
 */
class Preferencia extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Preferencia the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'preferencia';
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
            array('imagem1, imagem2, imagem3', 'length', 'max' => 255),
            array('cor1, cor2, cor3', 'length', 'max' => 6),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, usuario_id, imagem1, imagem2, imagem3, cor1, cor2, cor3', 'safe', 'on' => 'search'),
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
            'usuario_id' => 'Usuario',
            'imagem1' => 'Imagem1',
            'imagem2' => 'Imagem2',
            'imagem3' => 'Imagem3',
            'cor1' => 'Cor1',
            'cor2' => 'Cor2',
            'cor3' => 'Cor3',
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
        $criteria->compare('usuario_id', $this->usuario_id);
        $criteria->compare('imagem1', $this->imagem1, true);
        $criteria->compare('imagem2', $this->imagem2, true);
        $criteria->compare('imagem3', $this->imagem3, true);
        $criteria->compare('cor1', $this->cor1, true);
        $criteria->compare('cor2', $this->cor2, true);
        $criteria->compare('cor3', $this->cor3, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}