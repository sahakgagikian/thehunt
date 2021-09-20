<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%experiences}}`.
 */
class m210915_112722_create_experiences_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%experiences}}', [
            'id' => $this->primaryKey(),
            'resume_id' => $this->integer()->notNull(),
            'company_name' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'year_from' => $this->integer()->notNull(),
            'year_to' => $this->integer()->notNull(),
            'description' => $this->text(),
        ]);

        $this->addForeignKey('fk_experiences_resume_id', 'experiences', 'resume_id', 'resumes', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_experiences_resume_id', 'experiences');
        $this->dropTable('{{%experiences}}');
    }
}
