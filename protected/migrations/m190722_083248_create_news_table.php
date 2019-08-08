<?php

class m190722_083248_add_news_table extends CDbMigration
{
    public function safeUp()
    {
        $this->createTable(
            'news_table',
            array(
                'id' => 'pk',
                'name' => 'string NULL',
                'company' => 'string NULL',
                'link' => 'string NULL',
                'image' => 'string NULL',
                'status' => 'int NOT NULL DEFAULT 1',
                'testss' => 'text',
            ),
            "CHARSET=utf8 COLLATE=utf8_unicode_ci"
        );
    }

    public function safeDown()
    {
        $this->dropTable('tbl_rgw_participants');
    }
}