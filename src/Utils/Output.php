<?php

namespace DesignPatterns\Utils;

class Output
{
	private static $instance;

	protected function __construct()
	{

	}

	public static function getInstance()
	{
		if (null === static::$instance) 
		{
			static::$instance = new static();

		}

		return static::$instance;

	}

	function print($message = "")
	{
		if (is_array($message))
		{
			print_r($message);
			self::print();
		}
		else
		{
			echo $message . "\r\n";
		}
	}
}

?>