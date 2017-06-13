<?php
require_once('container.class.php');
require_once('fizzbuzz.php');

class fizzbuzz_test extends PHPUnit_Framework_TestCase {
	function test_input_three() {
		$test_value = 3;

		$mock = $this->getMockBuilder('container')
						  ->setMethods(['__construct','get_value','set_result','get_result'])
						  ->setConstructorArgs(["$test_value"])
						  ->getMock();

		$mock->expects($this->exactly(3))
			 ->method('get_value')
			 ->will($this->returnValue($test_value));

		$mock->expects($this->once())
			 ->method('set_result')
			 ->with($this->equalTo('fizz'));

		$mock->expects($this->once())
			 ->method('get_result')
			 ->will($this->returnValue('fizz'));

		// Run the code.
		fizzbuzz($mock);

		$this->assertEquals('fizz', $mock->get_result());
	}

	function test_input_five() {
		$test_value = 5;

		$mock = $this->getMockBuilder('container')
						  ->setMethods(['__construct','get_value','append_result','get_result'])
						  ->setConstructorArgs(["$test_value"])
						  ->getMock();

		$mock->expects($this->exactly(4))
			 ->method('get_value')
			 ->will($this->returnValue($test_value));

		$mock->expects($this->once())
			 ->method('append_result')
			 ->with($this->equalTo('buzz'));


		$mock->expects($this->once())
			 ->method('get_result')
			 ->will($this->returnValue('buzz'));

		// Run the code.
		fizzbuzz($mock);

		$this->assertEquals('buzz', $mock->get_result());
	}

	function test_input_fifteen() {
		$test_value = 15;

		$mock = $this->getMockBuilder('container')
						  ->setMethods(['__construct','get_value','append_result','set_result','get_result'])
						  ->setConstructorArgs(["$test_value"])
						  ->getMock();

		$mock->expects($this->exactly(3))
			 ->method('get_value')
			 ->will($this->returnValue($test_value));

		$mock->expects($this->once())
			 ->method('set_result')
			 ->with($this->equalTo('fizz'));

		$mock->expects($this->once())
			 ->method('append_result')
			 ->with($this->equalTo('buzz'));


		$mock->expects($this->once())
			 ->method('get_result')
			 ->will($this->returnValue('fizzbuzz'));

		// Run the code.
		fizzbuzz($mock);

		$this->assertEquals('fizzbuzz', $mock->get_result());
	}

	function test_input_seven() {
		$test_value = 7;

		$mock = $this->getMockBuilder('container')
						  ->setMethods(['__construct','get_value','append_result','get_result'])
						  ->setConstructorArgs(["$test_value"])
						  ->getMock();

		$mock->expects($this->exactly(5))
			 ->method('get_value')
			 ->will($this->returnValue($test_value));

		$mock->expects($this->once())
			 ->method('append_result')
			 ->with($this->equalTo($test_value));


		$mock->expects($this->once())
			 ->method('get_result')
			 ->will($this->returnValue($test_value));

		// Run the code.
		fizzbuzz($mock);

		$this->assertEquals('7', $mock->get_result());
	}
}
