<?php
class ValidatePasswordTest extends PHPUnit_Framework_TestCase {
	public function testValidLength() {
		$valpass = new ValidatePassword();
		$this->assertFalse($valpass->validLength('123456789'));
	}
}