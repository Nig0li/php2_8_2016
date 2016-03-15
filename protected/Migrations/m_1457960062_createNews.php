<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1457960062_createNews
    extends Migration
{

    public function up()
    {
        $this->createTable('news', [
            'title' => ['type' => 'string'],
            'text' => ['type' => 'text'],
        ]);
    }

    public function down()
    {
        $this->dropTable('news');
    }
    
}