<?php
class request
{
   public static function getAddress()
   {
      return $_SERVER['REQUEST_URI'];
   }
   public static function getUri()
   {
      return explode("/", self::getAddress());
   }
}
