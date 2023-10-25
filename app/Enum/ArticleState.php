<?php

namespace App\Enum;

use ReflectionClass;

class ArticleState{
    /** Available for everyone to read */
    const AVAILABLE = "available";
    /** Access to a list of IP addresses */
    const LIMITED_ACCESS = "limited_access";
    /** Access is closed to everyone */
    const ACCESS_CLOSED = "access_closed";
    /** Preparing to be deleted */
    const DELETION_STATUS = "deletion_status";
    /** Deleted */
    const DELETED = "deleted";

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