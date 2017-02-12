<?php

require "vendor/autoload.php";

use DesignPatterns\Patterns\AbstractFactory\FactoryProducer;


$shapeFactory = FactoryProducer::getFactory("SHAPE");

$shape1 = $shapeFactory->getShape("CIRCLE");

$shape1->draw();

$shape2 = $shapeFactory->getShape("RECTANGLE");

$shape2->draw();

$shape3 = $shapeFactory->getShape("SQUARE");

$shape3->draw();


$colorFactory = FactoryProducer::getFactory("COLOR");

$color1 = $colorFactory->getColor("RED");

$color1->fill();

$color2 = $colorFactory->getColor("GREEN");

$color2->fill();

$color3 = $colorFactory->getColor("BLUE");

$color3->fill();

?>