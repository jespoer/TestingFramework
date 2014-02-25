<?php

	/*
	 * -- MAIN FILE -- main file for testing framework.
	 */

	
	//include('functions.php');
	include('rand_test_fw.php');
	
	/* initate arrays */
/*	$array_1 = array(5,3,5,6,7,8,2,1,0);

	$array_handler = new Array_Handler();
	
	$tst_var = 8;
	
	
	
	echo "Std : Is member if not -1 : ".$array_handler->is_member($array_1, $tst_var);
	echo "<br>Mut1: Is member if not -1 : ".$array_handler->is_member_mutant_1($array_1, $tst_var);
	echo "<br>Mut2: Is member if not -1 : ".$array_handler->is_member_mutant_2($array_1, $tst_var);
	echo "<br>Mut3: Is member if not -1 : ".$array_handler->is_member_mutant_3($array_1, $tst_var);
	echo "<br>Mut4: Is member if not -1 : ".$array_handler->is_member_mutant_4($array_1, $tst_var);
	echo "<br>Mut5: Is member if not -1 : ".$array_handler->is_member_mutant_5($array_1, $tst_var);

	*/
	
	$random_test = new Random_Test();
	
	$random_test->test_membership();
	

?>