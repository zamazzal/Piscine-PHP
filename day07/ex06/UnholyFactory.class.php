<?php
class UnholyFactory {
	private $_members = array();

	public function absorb($obj) {
		if ($obj instanceof Fighter) {
			if (in_array($obj, $this->_members)) {
				print("(Factory already absorbed a fighter of type ". $obj->typeofobj() .")" . PHP_EOL);
			}
			else {
				$this->_members[] = $obj;
				print("(Factory absorbed a fighter of type ". $obj->typeofobj() .")" . PHP_EOL);
			}
		}
		else {
			print("(Factory can't absorb this, it's not a fighter)". PHP_EOL);
		}
	}
	public function fabricate($rf) {
		foreach ($this->_members as $obj)
		{
			if ($obj->typeofobj() == $rf)
			{
				print("(Factory fabricates a fighter of type " . $rf . ")" . PHP_EOL);
				return (clone $obj);
			}

		}
		print("(Factory hasn't absorbed any fighter of type ". $rf . ")" . PHP_EOL);
		return (NULL);
	}
}
?>
