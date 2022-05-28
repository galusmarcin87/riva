<?php

use yii\db\Migration;

/**
 * Class m171121_120201_user
 */
class m220528_100000_project_values extends Migration
{

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('project', 'elrv', $this->double());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {

    }
}
