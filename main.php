<?php

	include('functions.php');
	
	$my_array_1 = array(1,3,5,6,7,8,2,1);

	$array_handler = new Array_Handler();

	$my_array_1 = $array_handler->sort_int_array($my_array_1);
	
	print_r($my_array_1);
	
	echo $array_handler->is_member_sorted($my_array_1, 2);

?>