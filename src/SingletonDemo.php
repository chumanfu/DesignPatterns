<?php

require "vendor/autoload.php";

use DesignPatterns\Patterns\Singleton\SingleObject;

$object = SingleObject::getInstance();

$object->showMessage();

?>