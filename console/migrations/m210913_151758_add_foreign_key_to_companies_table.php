<?php

use yii\db\Migration;

/**
 * Class m210913_151758_add_foreign_key_to_companies_table
 */
class m210913_151758_add_foreign_key_to_companies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_user_id', 'companies', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210913_151758_add_foreign_key_to_companies_table cannot be reverted.\n";

        return false;
    }
}
