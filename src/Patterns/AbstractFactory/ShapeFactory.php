<?php

namespace DesignPatterns\Patterns\AbstractFactory;

class ShapeFactory extends AbstractFactory 
{
   public function getShape($shapeType)
   {
      if ($shapeType == null)
      {
         return null;
      }
      else
      {
         $shapeType = strtoupper($shapeType);
      }
      
      if ($shapeType == "CIRCLE")
      {
         return new Circle();
      }
      else if ($shapeType == "RECTANGLE")
      {
         return new Rectangle();
      }
      else if ($shapeType == "SQUARE")
      {
         return new Square();
      }
      
      return null;
   }
   
   function getColor($color) 
   {
      return null;
   }
}

?>