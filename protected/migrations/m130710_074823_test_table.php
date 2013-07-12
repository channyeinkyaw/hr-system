<?php

class m130710_074823_test_table extends CDbMigration
{
	public function up()
	{
      $this->createTable('test_table', array(
        'id'=>'pk',
        'username'=>'string NOT NULL',
        'password'=>'string NOT NULL',
        'created_at'=>'DATETIME NOT NULL',
        'last_login_at'=>'DATETIME NOT NULL',
      )); 
	}

	public function down()
	{
//		echo "m130710_074823_test_table does not support migration down.\n";
//		return false;
      $this->dropTable('test_table');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}
	public function safeDown()
	{
	}
	*/
}