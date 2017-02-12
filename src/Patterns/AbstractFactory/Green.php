<?php

namespace DesignPatterns\Patterns\AbstractFactory;

use DesignPatterns\Utils\UtilsHelper;

class Green implements Color
{
	public function fill()
	{
		UtilsHelper::print("Inside Green::fill() method.");
	}
}

?>