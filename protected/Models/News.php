<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class News
 * @package App\Models
 *
 * @property $title
 * @property $text
 */
class News
    extends Model
{
    protected static $schema = [
        'table' => 'news',
        'columns' => [
            'title' => ['type' => 'string'],
            'text' => ['type' => 'text']
        ],
        'relations' => [
            'author' => ['type' => self::BELONGS_TO, 'model' => Author::class]
        ]
    ];

}