<?php

use yii\db\Migration;

/**
 * Class m210920_094841_add_update_date__columnToresumestable
 */
class m210920_094841_add_update_date__columnToresumestable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('resumes', 'update_date', 'date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('resumes', 'update_date');
    }
}
