<?php
abstract class Fighter {
	protected $mytype;

	public function __construct($type) {
		$this->mytype = $type;
	}
	public function typeofobj() {
		return ($this->mytype);
	}
	abstract public function fight($target);
}
?>
