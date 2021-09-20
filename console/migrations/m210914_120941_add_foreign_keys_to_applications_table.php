<?php

use yii\db\Migration;

/**
 * Class m210914_120941_add_foreign_keys_to_applications_table
 */
class m210914_120941_add_foreign_keys_to_applications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_applications_candidate_id', 'applications', 'candidate_id', 'candidates', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_applications_job_id', 'applications', 'job_id', 'jobs', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_applications_candidate_id', 'applications');
        $this->dropIndex('fk_applications_candidate_id', 'applications');

        $this->dropForeignKey('fk_applications_job_id', 'applications');
        $this->dropIndex('fk_applications_job_id', 'applications');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210914_120941_add_foreign_keys_to_applications_table cannot be reverted.\n";

        return false;
    }
    */
}
