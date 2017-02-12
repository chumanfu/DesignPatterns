<?php

namespace DesignPatterns\Patterns\AbstractFactory;

abstract class AbstractFactory 
{
   abstract function getColor($color);
   abstract function getShape($shape);
}

?>