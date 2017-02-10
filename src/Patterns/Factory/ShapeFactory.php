<?php

namespace DesignPatterns\Patterns\Factory;

class ShapeFactory
{
	public function getShape($shapeType)
	{
		if ($shapeType == null)
		{
			return null;
		}

		if (strtoupper($shapeType) == "CIRCLE")
		{
			return new Circle();
		}

		if (strtoupper($shapeType) == "RECTANGLE")
		{
			return new Rectangle();
		}

		if (strtoupper($shapeType) == "SQUARE")
		{
			return new Square();
		}

		return null;
	}
}