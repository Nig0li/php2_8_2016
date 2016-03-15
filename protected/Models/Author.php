<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Author
 * @package App\Models
 *
 * @property $name
 */
class Author
    extends Model
{
    protected static $schema = [
        'columns' => [
            'name' => ['type' => 'string'],
        ]
    ];
}