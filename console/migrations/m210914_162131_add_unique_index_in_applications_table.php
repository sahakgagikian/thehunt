<?php

use yii\db\Migration;

/**
 * Class m210914_162131_add_unique_index_in_applications_table
 */
class m210914_162131_add_unique_index_in_applications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('idx_unique_candidate_id_job_id',
            'applications',
            ['candidate_id', 'job_id'],
            true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx_unique_candidate_id_job_id', 'applications');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210914_162131_add_unique_index_in_applications_table cannot be reverted.\n";

        return false;
    }
    */
}
