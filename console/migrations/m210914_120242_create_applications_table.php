<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%applications}}`.
 */
class m210914_120242_create_applications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('applications', [
            'id' => $this->primaryKey(),
            'candidate_id' => $this->integer(),
            'job_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%applications}}');
    }
}
