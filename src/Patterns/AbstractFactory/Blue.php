<?php

namespace DesignPatterns\Patterns\AbstractFactory;

use DesignPatterns\Utils\UtilsHelper;

class Blue implements Color
{
	public function fill()
	{
		UtilsHelper::print("Inside Blue::fill() method.");
	}
}

?>