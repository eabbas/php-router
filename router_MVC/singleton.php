<?php

class singleton{
    public static $obj;
    private function __construct(){}
    private function __clone(){}
    public static function makeObject($obj){
        if (!self::$obj) {
            self::$obj [static::class] = $obj();
        }
        var_dump(self::$obj);
        return self::$obj;
    }
}