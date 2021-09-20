<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%educations}}`.
 */
class m210915_112652_create_educations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%educations}}', [
            'id' => $this->primaryKey(),
            'resume_id' => $this->integer()->notNull(),
            'degree' => $this->string()->notNull(),
            'field_of_study' => $this->string()->notNull(),
            'educational_institution' => $this->string()->notNull(),
            'year_from' => $this->integer()->notNull(),
            'year_to' => $this->integer()->notNull(),
            'description' => $this->text(),
        ]);

        $this->addForeignKey('fk_educations_resume_id', 'educations', 'resume_id', 'resumes', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_educations_resume_id', 'educations');
        $this->dropTable('{{%educations}}');
    }
}
