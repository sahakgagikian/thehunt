<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%applications}}`.
 */
class m210922_231739_add_company_id_column_to_applications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('applications', 'company_id', 'int');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('applications', 'company_id');
    }
}
