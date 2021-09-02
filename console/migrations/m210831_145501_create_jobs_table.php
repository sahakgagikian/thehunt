<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%jobs}}`.
 */
class m210831_145501_create_jobs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('jobs', [
            'id' => $this->primaryKey(),
            'title' => $this->string(64)->notNull(),
            'company_id' => $this->integer()->notNull(),
            'open_jobs_count' => $this->integer()->notNull(),
            'location' => $this->string(255)->notNull(),
            'working_hours' => $this->string(16)->notNull()
        ]);

        $this->addForeignKey('fk_company_id', 'jobs', 'company_id', 'companies', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jobs}}');
    }
}
