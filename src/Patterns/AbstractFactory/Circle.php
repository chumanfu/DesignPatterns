<?php

namespace DesignPatterns\Patterns\AbstractFactory;

use DesignPatterns\Utils\UtilsHelper;

class Circle implements Shape
{
	public function draw()
	{
		UtilsHelper::print("Inside Circle::draw() method.");
	}
}

?>