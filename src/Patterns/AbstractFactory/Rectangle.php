<?php

namespace DesignPatterns\Patterns\AbstractFactory;

use DesignPatterns\Utils\UtilsHelper;

class Rectangle implements Shape
{
	public function draw()
	{
		UtilsHelper::print("Inside Rectangle::draw() method.");
	}
}

?>