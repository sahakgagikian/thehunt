<?php

use frontend\models\SignupForm;
use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m210910_062904_add_type_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'type', "enum('" . SignupForm::CANDIDATE . "', '" . SignupForm::COMPANY . "')");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'type');
    }
}
