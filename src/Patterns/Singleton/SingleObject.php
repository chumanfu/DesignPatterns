<?php

namespace DesignPatterns\Patterns\Singleton;

use DesignPatterns\Utils\UtilsHelper;

class SingleObject 
{
   //create an object of SingleObject
   private static $instance = null;

   //make the constructor private so that this class cannot be
   //instantiated
   public function __construct(){}

   //Get the only object available
	public static function getInstance()
	{
		if (null === static::$instance) 
		{
			static::$instance = new static();

		}

		return static::$instance;
	}

   public function showMessage()
   {
      UtilsHelper::print("Hello World!");
   }
}

?>