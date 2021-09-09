<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%candidates}}`.
 */
class m210907_141359_create_candidates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%candidates}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(64)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%candidates}}');
    }
}
