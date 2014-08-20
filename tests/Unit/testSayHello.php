<?php

class testSayHello extends PHPUnit_Framework_TestCase
{
	public static function testMustBeEqual()
	{
		$a = new HelloWorld\SayHello();
		return $this->assertEquals('Hello World, Composer!',$a->world());
	}
}