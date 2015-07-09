<?php 


class ClassTest extends \PHPUnit_Framework_TestCase
{
    // ...

    public function testTrueIsTrue()
    {
        // Arrange
        $foo = true;
	$this->assertTrue($foo);
    }

    // ...
}
