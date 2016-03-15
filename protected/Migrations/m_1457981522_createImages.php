<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1457981522_createImages
    extends Migration
{

    public function up()
    {
        $this->createTable('images', [
            'name' => ['type' => 'string'],
        ]);
    }

    public function down()
    {
        $this->dropTable('images');
    }
    
}