<?php

use yii\db\Migration;

/**
 * Class m210920_094841_add_update_date_column_to_resumes_table
 */
class m210920_094841_add_update_date_column_to_resumes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('resumes', 'update_date', 'date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('resumes', 'update_date');
    }
}
