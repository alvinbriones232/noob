<?php
class ValidatePassword {
	const MIN_LENGTH = 1;
	const MAX_LENGTH = 4;
	public function validLength($password) {
		$passLength = strlen($password);
		return $passLength >= self::MIN_LENGTH && $passLength <=  self::MAX_LENGTH;
	}
}