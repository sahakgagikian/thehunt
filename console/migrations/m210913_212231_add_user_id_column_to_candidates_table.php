<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%candidates}}`.
 */
class m210913_212231_add_user_id_column_to_candidates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('candidates', 'user_id', 'int');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('candidates', 'user_id');
    }
}
