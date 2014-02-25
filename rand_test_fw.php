<?php

include_once('functions.php');

class Random_Test{

	private $handler;

	function __construct(){
		$this->set_up();
	}
	
	/* Executed before each test */
	public function set_up(){
		$this->handler = new Array_Handler();
	}
	
	/* -- TEST_IS_MEMBER -- */
	public function test_membership(){
	
		$nr_tests = 20;
	
		for($j = 0; $j<$nr_tests;$j++){
	
		$array = array();
		$array[0] = $array_element = rand(); /* keep one element in array for future */
		
		for($i = 1; $i<10; $i++){
			$array[$i] = rand();
		}
		
		$result = $this->handler->is_member_mutant_1($array, $array_element);
		
		if($result < 0){
			echo '<br>--Random test failed : Did not find'.$array_element.' in array';
			print_r($array);
		}else{
			echo '<br>--Random test success';
		}
		
		}
	}

	public function run_test(){
		
	}
	
	/* Executed after each test */
	public function tear_down(){
	
	}
	
	
	

}


?>