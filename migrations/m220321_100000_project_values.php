<?php

use yii\db\Migration;

/**
 * Class m171121_120201_user
 */
class m220321_100000_project_values extends Migration
{

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('project', 'equality', $this->double());
        $this->addColumn('project', 'initial_value', $this->double());
        $this->addColumn('project', 'flrv', $this->double());
        $this->addColumn('project', 'ebrv', $this->double());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {

    }
}
