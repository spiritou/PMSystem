<?php

namespace app\Core;

class Container
{
   

   public function get($class)
   {
      $reflectionClass = new \ReflectionClass($class);
      $constructor = $reflectionClass->getConstructor();

      if(is_null($constructor)) {
         return new $class;
      }

       $dependencies = [];

       foreach ($constructor->getParameters() as $parameter) {
            $type = $parameter->getType();
            if($type && !$type->isBuiltin()) {
                $depClassName = $type->getName();
                $dependencies[] = $this->get($depClassName);
            }
       }

         return $reflectionClass->newInstanceArgs($dependencies);
   }
}