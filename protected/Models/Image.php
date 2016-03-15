<?php
/**
 * Created by PhpStorm.
 * User: Nigm
 * Date: 14.03.2016
 * Time: 22:51
 */

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Image
 * @package App\Models
 *
 * @property $name
 */
class Image
    extends Model
{
    protected static $schema = [
        'columns' => [
            'name' => ['type' => 'string'],
        ]
    ];

}