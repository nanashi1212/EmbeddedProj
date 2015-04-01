<?php
	$img = isset($_REQUEST['img']) ? $_REQUEST['img'] : null;
	
	switch ($img) {
	case('0'):
		$img = "img1.png";
		break;
	case('5'):
		$img = "img2.png";
		break;
	case('10'):
		$img = "img3.png";
		break;
	case('15'):
		$img = "img4.png";
		break;
	case('20'):
		$img = "img5.png";
		break;
	case('25'):
		$img = "img6.png";
		break;
}
	echo $img == null ? "imgDefault.png" : $img;
?>