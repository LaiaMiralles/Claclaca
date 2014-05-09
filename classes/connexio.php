<?php
class connexio extends mysqli {
	public function __construct() {
		parent::__construct("mysql.hostinger.es","u881681525_cla","claclaca1","u881681525_cla");

		if (mysqli_connect_error()) {
			die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}
	}
}

?>