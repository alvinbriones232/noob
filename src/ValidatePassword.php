<?php
class ValidatePassword {
	public function validLength($password) {
		$passLength = strlen($password);
		return $passLength >= 1 && $passLength <= 4;
	}
}