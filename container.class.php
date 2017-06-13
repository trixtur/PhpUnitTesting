<?php

class container {
	private $_value, $_result;

	public function __construct($value) {
		$this->_value = $value + 0;
		$this->_result = '';
	}

	public function set_value($value) {
		$this->_value = $value;
	}

	public function get_value() {
		return $this->_value;
	}

	public function set_result($result) {
		$this->_result = $result;
	}

	public function append_result($result_append) {
		$this->_result .= $result_append;
	}

	public function get_result() {
		return $this->_result;
	}
}
