<?php

use yii\db\Migration;

/**
 * Class m210824_110307_categories
 */
class m210824_110307_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'title' => $this->string(64)->notNull(),
            'image' => $this->string(255),
            'jobs_count' => $this->integer(),
            'sort' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categories');
    }

}
