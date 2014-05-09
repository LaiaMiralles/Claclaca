<?php
class connexio extends mysqli {
	public function __construct() {
		parent::__construct("localhost","evai","q1w2e3r4","evai");

		if (mysqli_connect_error()) {
			die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}
	}
}

?>