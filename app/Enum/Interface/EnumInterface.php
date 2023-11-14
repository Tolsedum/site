<?php

namespace App\Enum\Interface;

use ReflectionClass;

interface EnumInterface{
    public static function getParams(array $params = []);
    public static function getConstValus(array $params = []);
}