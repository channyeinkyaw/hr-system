<?php

/**
 * This is the model class for table "personal_info".
 *
 * The followings are the available columns in table 'personal_info':
 * @property integer $ID
 * @property string $first_name
 * @property string $last_name
 * @property string $birthday
 * @property string $address
 * @property string $mobile_no
 * @property string $email
 * @property integer $dept_id
 * @property integer $educ_id
 * @property integer $job_id
 */
class Personalinfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Personalinfo the static model class
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
		return 'personal_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, birthday, address, mobile_no, email, dept_id, educ_id, job_id', 'required'),
			array('dept_id, educ_id, job_id', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, email', 'length', 'max'=>128),
			array('mobile_no', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, first_name, last_name, birthday, address, mobile_no, email, dept_id, educ_id, job_id', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'birthday' => 'Birthday',
			'address' => 'Address',
			'mobile_no' => 'Mobile No',
			'email' => 'Email',
			'dept_id' => 'Dept',
			'educ_id' => 'Educ',
			'job_id' => 'Job',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('mobile_no',$this->mobile_no,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('dept_id',$this->dept_id);
		$criteria->compare('educ_id',$this->educ_id);
		$criteria->compare('job_id',$this->job_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}