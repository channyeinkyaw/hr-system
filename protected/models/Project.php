<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $ID
 * @property string $project_name
 * @property string $pro_description
 * @property string $leader_name
 * @property string $deadline
 * @property integer $dept_id
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Project the static model class
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
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_name, pro_description, leader_name, deadline, dept_name', 'required'),
//			array('dept_id', 'numerical', 'integerOnly'=>true),
			array('project_name, leader_name, dept_name', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, project_name, pro_description, leader_name, deadline, dept_name', 'safe', 'on'=>'search'),
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
			'project_name' => 'Project Name',
			'pro_description' => 'Project Description',
			'leader_name' => 'Leader Name',
			'deadline' => 'Deadline',
			'dept_name' => 'Department Name',
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
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('pro_description',$this->pro_description,true);
		$criteria->compare('leader_name',$this->leader_name,true);
		$criteria->compare('deadline',$this->deadline,true);
		$criteria->compare('dept_name',$this->dept_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}