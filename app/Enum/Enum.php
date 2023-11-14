<?php

namespace App\Enum;

use ReflectionClass;
use App\Enum\Interface\EnumInterface;


class Enum implements EnumInterface{
    public static function getParams(array $params = []){
        $ref = new ReflectionClass(static::class);
        $list_const = $ref->getConstants();
        return $list_const;
    }

    public static function getConstValus(array $params = []){
        $ret_values = [];
        foreach (static::getParams() as $value) {
            $ret_values[] = $value;
        }
        return $ret_values;
    }
}