<?php

require "vendor/autoload.php";

use DesignPatterns\Patterns\Factory\ShapeFactory;

$shapeFactory = new ShapeFactory();

$shape1 = $shapeFactory->getShape("CIRCLE");

$shape1->draw();

$shape2 = $shapeFactory->getShape("RECTANGLE");

$shape2->draw();

$shape3 = $shapeFactory->getShape("SQUARE");

$shape3->draw();

?>