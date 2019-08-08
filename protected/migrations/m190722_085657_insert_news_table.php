<?php

class m190722_085657_insert_news_table extends CDbMigration
{
	public function up()
	{
        $this->insert('news_table', array(
            'name' => 'Title 1 Hapon',
            'link' => 'http://google.com',
        ));
	}

	public function down()
	{
		echo "m190722_085657_insert_news_table does not support migration down.\n";
		return false;
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