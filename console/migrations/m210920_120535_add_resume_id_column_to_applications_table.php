<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%applications}}`.
 */
class m210920_120535_add_resume_id_column_to_applications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('applications', 'resume_id', 'int');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('applications', 'resume_id');
    }
}
