<?php

namespace App\Models;

use Source\Database\Db;

class Test
{
    public static function connectTable()
    {
       return Db::getInstance()->table('test');
    }
}