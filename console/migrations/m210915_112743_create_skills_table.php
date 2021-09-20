<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%skills}}`.
 */
class m210915_112743_create_skills_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%skills}}', [
            'id' => $this->primaryKey(),
            'resume_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'proficiency' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey('fk_skills_resume_id', 'skills', 'resume_id', 'resumes', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_skills_resume_id', 'skills');
        $this->dropTable('{{%skills}}');
    }
}
