<?php

use yii\db\Migration;

/**
 * Class m210913_212316_add_foreign_key_to_candidates_table
 */
class m210913_212316_add_foreign_key_to_candidates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_candidate_user_id', 'candidates', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210913_212316_add_foreign_key_to_candidates_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210913_212316_add_foreign_key_to_candidates_table cannot be reverted.\n";

        return false;
    }
    */
}
