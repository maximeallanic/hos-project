<?php
/**
 * Created by PhpStorm.
 * User: mallanic
 * Date: 30/03/16
 * Time: 12:47
 */

namespace Luxury\Api;


class Permissions
{
    CONST USER_CREATE = 'user.create';
    CONST USER_DELETE = 'user.delete';
    CONST USER_UPDATE = 'user.update';

    static $array = array(
        self::USER_DELETE => 'Delete User',
        self::USER_CREATE => 'Create User',
        self::USER_UPDATE => 'Update User'
    );

    static function get() {
        return static::$array;
    }
}