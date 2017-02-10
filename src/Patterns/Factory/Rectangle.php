<?php

namespace DesignPatterns\Patterns\Factory;

use DesignPatterns\Utils\UtilsHelper;

class Rectangle implements Shape
{
	public function draw()
	{
		UtilsHelper::print("Inside Rectangle::draw() method.");
	}
}

?>