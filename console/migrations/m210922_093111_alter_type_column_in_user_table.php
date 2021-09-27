<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m210922_093111_alter_type_column_in_user_table
 */
class m210922_093111_alter_type_column_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('user', 'type', 'role');
        $this->alterColumn('user', 'role', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('user','role', "enum('candidate', 'company')" );
        $this->renameColumn('user', 'role', 'type');

        return false;
    }
}
