<?php 

namespace Tools;

class Validator {
	
	private $pattern;
	private $value;
	
	function __construct() {
		
	}
	
	private function runValidation() {
		preg_match($this->pattern, $this->value, $result);
		return count($result) >= 1 ? true : false;
	}
	
	/**
	 * Check if input is integer
	 * @param <b>int</b> - integer number
	 * @return <b>bool</b> - <i>true</i> if input is integer, <i>false</i> if input is not ingteger
	 */
	public function validateInteger($value) {
		$this->pattern = "/^[-0-9]{1,}$/i";
		$this->value = $value;
		return $this->runValidation();
	}
	
	/**
	 * Check if input is float
	 * @param <b>float</b> - float number
	 * @return <b>bool</b> - <i>true</i> if valid format, <i>false</i> if invalid format
	 */
	public function validateFloat($value) {
		$this->pattern = "/^([-0-9]{1,}\.[0-9]{1,})|([-0-9]{1,})$/i";
		$this->value = $value;
		return $this->runValidation();
	}
	
	/**
	 * Check if IP address is in valid format
	 * @param <b>string</b> - IP address
	 * @return <b>bool</b> - <i>true</i> if valid format, <i>false</i> if invalid format
	 */
	public function validateIP($value) {
		$this->pattern = "/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/i";
		$this->value = $value;
		return $this->runValidation();
	}
	
	/**
	* Check if email address is in valid format
	* @param <b>string</b> - email address
	* @return <b>bool</b> - <i>true</i> if valid format, <i>false</i> if invalid format
	*/
	public function validateEmail($value) {
		$this->pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i";
		$this->value = $value;
		return $this->runValidation();
	}
	
	/**
	 * Check if input is alpha-numeric
	 * @param <b>string</b> - string
	 * @return <b>bool</b> - <i>true</i> if input is alpha-numeric, <i>false</i> if input is not alpha-numeric
	 */
	public function validateAlphaNumeric($value) {
		$this->pattern = "/^[0-9a-zA-Z]{1,}$/i";
		$this->value = $value;
		return $this->runValidation();
	}
}
