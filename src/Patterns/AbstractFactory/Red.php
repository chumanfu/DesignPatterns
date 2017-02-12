<?php

namespace DesignPatterns\Patterns\AbstractFactory;

use DesignPatterns\Utils\UtilsHelper;

class Red implements Color
{
	public function fill()
	{
		UtilsHelper::print("Inside Red::fill() method.");
	}
}

?>