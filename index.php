<?php

$view = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';

switch ($view) {
	case('home'):
		$view = "home.php";
		break;
}

include __DIR__ . "/views/$view";
?>