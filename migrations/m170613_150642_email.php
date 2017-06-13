<?php

use yii\db\Migration;

class m170613_150642_email extends Migration
{
    public function up()
    {
        $this->createTable('email', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique(),
        ]);
    }

    public function down()
    {
        $this->dropTable('email');
    }

}
