<?php
ob_start();
session_start();

function signedin() {
	if(isset($_SESSION['value'])&&!empty($_SESSION['value'])) {
		return true;
	} else {
		return false;
	}
}


?>