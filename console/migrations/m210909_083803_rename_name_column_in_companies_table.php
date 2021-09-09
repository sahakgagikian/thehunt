<?php

use yii\db\Migration;

/**
 * Class m210909_083803_rename_name_column_in_companies_table
 */
class m210909_083803_rename_name_column_in_companies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('companies', 'name', 'username');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('companies', 'username', 'name');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210909_083803_rename_name_column_in_companies_table cannot be reverted.\n";

        return false;
    }
    */
}
