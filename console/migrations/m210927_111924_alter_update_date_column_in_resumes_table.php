<?php

use yii\db\Migration;

/**
 * Class m210927_111924_alter_update_date_column_in_resumes_table
 */
class m210927_111924_alter_update_date_column_in_resumes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('resumes', 'update_date', 'update_date_and_time');
        $this->alterColumn('resumes', 'update_date_and_time', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('resumes','update_date_and_time', $this->date());
        $this->renameColumn('resumes', 'update_date_and_time', 'update_date');

        return false;
    }
}
