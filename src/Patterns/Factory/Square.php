<?php

namespace DesignPatterns\Patterns\Factory;

use DesignPatterns\Utils\UtilsHelper;

class Square implements Shape
{
	public function draw()
	{
		UtilsHelper::print("Inside Square::draw() method.");
	}
}

?>