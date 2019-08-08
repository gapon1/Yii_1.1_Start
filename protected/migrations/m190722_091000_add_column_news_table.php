<?php

class m190722_091000_add_column_news_table extends CDbMigration
{
	public function up()
	{
        $this->addColumn('news_table', 'confirmPdd3', "smallint(1) DEFAULT '0'");
	}

	public function down()
	{
		echo "m190722_091000_add_column_news_table does not support migration down.\n";
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