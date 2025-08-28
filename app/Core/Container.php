<?php

namespace app\Core;

class Container
{
    private $instances = [];

   public function get($class)
   {
      $reflectionClass = new \ReflectionClass($class);
      $constructor = $reflectionClass->getConstructor();

      if(is_null($constructor)) {
         return new $class;
      }
   }
}