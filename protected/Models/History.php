<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class History
 * @package App\Models
 *
 * @property $title
 * @property $text
 */
class History
    extends Model
{
    protected static $schema = [
        'table' => 'history',
        'columns' => [
            '__id' => ['type' => 'string'],
            'title' => ['type' => 'string'],
            'text' => ['type' => 'text']
        ]
    ];
}