<?php

/**
 * This is the model class for table "standard_hour".
 *
 * The followings are the available columns in table 'standard_hour':
 * @property integer $ID
 * @property string $std_start
 * @property string $std_end
 */
class StandardHour extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StandardHour the static model class
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
		return 'standard_hour';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('std_start, std_end', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, std_start, std_end', 'safe', 'on'=>'search'),
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
			'std_start' => 'Std Start',
			'std_end' => 'Std End',
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
		$criteria->compare('std_start',$this->std_start,true);
		$criteria->compare('std_end',$this->std_end,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}