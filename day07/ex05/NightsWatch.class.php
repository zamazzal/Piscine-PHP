<?php
class NightsWatch {
	private $_members = array();

	public function recruit($name){
		$this->_members[] = $name;
	}
	public function fight()
	{
		foreach ($this->_members as $member)
			if ($member instanceof IFighter)
				$member->fight();
	}
}
?>
