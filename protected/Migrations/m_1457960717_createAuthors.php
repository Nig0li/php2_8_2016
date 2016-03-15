<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1457960717_createAuthors
    extends Migration
{

    public function up()
    {
        $this->createTable('authors', [
            'name' => ['type' => 'string'],
        ]);
        $this->addColumn('news', [
            '__author_id' => ['type' => 'link']
        ]);
    }

    public function down()
    {
        $this->dropColumn('news', '__author_id');
        $this->dropTable('authors');
    }
    
}