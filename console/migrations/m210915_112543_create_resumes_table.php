<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%resumes}}`.
 */
class m210915_112543_create_resumes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('resumes', [
            'id' => $this->primaryKey(),
            'candidate_id' => $this->integer()->notNull(),
            'candidate_name' => $this->string()->notNull(),
            'candidate_email' => $this->string()->notNull(),
            'candidate_profession_title' => $this->string()->notNull(),
            'candidate_location' => $this->string()->notNull(),
            'candidate_website' => $this->string(),
            'candidate_desired_salary' => $this->decimal(),
            'candidate_age' => $this->integer()->notNull(),
            'cover_image' => $this->string(),
            'educations_cover_image' => $this->string(),
            'experiences_cover_image' => $this->string(),
        ]);

        $this->addForeignKey('fk_resumes_candidate_id', 'resumes', 'candidate_id', 'candidates', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_resumes_candidate_id', 'resumes');
        $this->dropTable('{{%resumes}}');
    }
}
