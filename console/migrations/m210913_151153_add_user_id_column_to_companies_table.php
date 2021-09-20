<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%companies}}`.
 */
class m210913_151153_add_user_id_column_to_companies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('companies', 'user_id', 'int');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('companies', 'user_id');
    }
}
