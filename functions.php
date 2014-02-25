<?php

class Array_Handler{

	function __construct(){
	}
	
	// -- SORT_INT_ARRAY -- 
	//@ requires length > 1 && is_array(array)
	//@ ensures array[n] <= array[n+1] for all n = 0,1,2...
	public function sort_int_array($array){
	
		/* sort with PHPs native sort implementation which uses quicksort */
		sort($array, SORT_NUMERIC);
		
		return $array;
	}
	
	// -- IS_MEMBER_SORTED --
	//@ requires 	
	//@ ensures 
	public function is_member_sorted($array, $key){
		
		$min = 0;
		$max = count($array) - 1;
		
		/* search through array with a binary search algorithm */
		while($max >= $min){
			
			$mid = $this->mid_number($min, $max);
			
			if($array[$mid] == $key){
				return $mid;
			}else if($array[$mid] < $key){
				$min = $mid + 1;
			}else{
				$max = $mid - 1;
			}
		}
		
		/* key is not a member */
		return -1;
	}
	
	// -- IS_MEMBER_UNSORTED -- 
	public function is_member_unsorted($array, $key){
		// sort array
		$this->sort_int_array();
		
		//check membership
		return $this->is_member_sorted($key);
	}
	
	/*
	* ---- PRIVATE FUNCTIONS ---- 
	*/
	
	/* -- MID_NUMBER -- */
	private function mid_number($min, $max){
		$mid = (int)(($min +$max)/2);
		return $mid;
	}

}


?>