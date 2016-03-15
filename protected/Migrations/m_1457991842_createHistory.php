<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1457991842_createHistory
    extends Migration
{

    public function up()
    {
        $this->createTable('history', [
            'title' => ['type' => 'string'],
            'text' => ['type' => 'text'],
        ]);
    }

    public function down()
    {
        $this->dropTable('history');
    }
    
}