<?php

namespace DesignPatterns\Patterns\AbstractFactory;

class FactoryProducer 
{
   public static function getFactory($choice)
   {
      if ($choice == null)
      {
         return null;
      }
      else
      {
         $choice = strtoupper($choice);
      }

      if ($choice == "SHAPE")
      {
         return new ShapeFactory();
         
      }
      else if ($choice == "COLOR")
      {
         return new ColorFactory();
      }
      
      return null;
   }
}

?>