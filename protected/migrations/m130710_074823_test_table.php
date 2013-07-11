<?php

class m130710_074823_test_table extends CDbMigration
{
	public function up()
	{
      $this->createTable('tbl_news', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
        ));
	}

	public function down()
	{
//		echo "m130710_074823_test_table does not support migration down.\n";
//		return false;
      $this->dropTable('tbl_news');
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