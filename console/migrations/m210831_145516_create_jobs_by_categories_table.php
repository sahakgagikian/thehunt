<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%jobs_by_categories}}`.
 */
class m210831_145516_create_jobs_by_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('jobs_by_categories', [
            'id' => $this->primaryKey(),
            'job_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey('fk_job_id', 'jobs_by_categories', 'job_id', 'jobs', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_category_id', 'jobs_by_categories', 'category_id', 'categories', 'id' ,'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jobs_by_categories}}');
    }
}
