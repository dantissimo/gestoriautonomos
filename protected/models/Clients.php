<?php

/**
 * This is the model class for table "clients".
 *
 * The followings are the available columns in table 'clients':
 * @property integer $id_client
 * @property string $nom
 * @property string $cognom1
 * @property string $cognom2
 * @property string $dni
 * @property string $carrer
 * @property string $num
 * @property string $pis
 * @property string $porta
 * @property string $complement
 * @property string $poblacio
 * @property string $cp
 * @property string $provincia
 * @property string $telefono
 * @property string $email
 * @property string $nom_complet
 */
class Clients extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clients the static model class
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
		return 'clients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom, cognom1, cognom2, dni, carrer, num, poblacio, cp, provincia, telefono, email', 'required'),
			array('nom, cognom1, cognom2, carrer, poblacio, provincia, email', 'length', 'max'=>50),
			array('dni', 'length', 'max'=>10),
			array('num', 'length', 'max'=>3),
			array('pis, porta', 'length', 'max'=>2),
			array('cp', 'length', 'max'=>5),
			array('telefono', 'length', 'max'=>9),
			array('nom_complet', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_client, nom, cognom1, cognom2, dni', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_client' => 'Id Client',
			'nom' => 'Nombre',
			'cognom1' => 'Primer Apellido',
			'cognom2' => 'Segundo Apellido',
			'dni' => 'NIF/CIF',
			'carrer' => 'Direccion',
			'num' => 'Numero',
			'pis' => 'Piso',
			'porta' => 'Puerta',
			'complement' => 'Complemento',
			'poblacio' => 'Poblacion',
			'cp' => 'CP',
			'provincia' => 'Provincia',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'nom_complet' => 'Nombre Completo',
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

		$criteria->compare('id_client',$this->id_client);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('cognom1',$this->cognom1,true);
		$criteria->compare('cognom2',$this->cognom2,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('carrer',$this->carrer,true);
		$criteria->compare('num',$this->num,true);
		$criteria->compare('pis',$this->pis,true);
		$criteria->compare('porta',$this->porta,true);
		$criteria->compare('complement',$this->complement,true);
		$criteria->compare('poblacio',$this->poblacio,true);
		$criteria->compare('cp',$this->cp,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nom_complet',$this->nom_complet,true);

		if(Yii::app()->user->name != 'Administrador')
			$criteria->addCondition('id_client='.Yii::app()->user->id_client);
			
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
}