<?php

namespace DesignPatterns\Utils;

class UtilsHelper
{
	static function print($message = "")
	{
		Output::getInstance()->print($message);
	}
}