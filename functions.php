<?php

/*
 *
 *
 *
 */

class Array_Handler{

	function __construct(){
	}
	
	// -- SORT_INT_ARRAY -- 
	//@ requires length > 1 && is_array(array)
	//@ ensures array[n] <= array[n+1] for all n = 0,1,2...
	public function sort_int_array($array){
	
		/* sort with PHPs native sort which uses quicksort */
		sort($array, SORT_NUMERIC);
		
		return $array;
	}
	
	/* -- MUTANT 1 - SORT_INT_ARRAY -- */
	public function sort_int_array_mutant_1($array){
	
		/* sort with PHPs native sort implementation which uses quicksort */
		sort($array, SORT_NUMERIC);
		
		return array_reverse($array);
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
	
	/* -- MUTANT 1 - IS_MEMBER_SORTED */
	public function is_member_sorted_mutant_1($array, $key){
		
		$min = 1; //Mutation (Should be 0)
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
	
	/* -- MUTANT 2 - IS_MEMBER_SORTED */
	public function is_member_sorted_mutant_2($array, $key){
		
		$min = 0;
		$max = count($array) - 2;//Mutation, should be - 1
		
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
	public function is_member($array, $key){
		// sort array
		$array = $this->sort_int_array($array);
		
		//check membership
		return $this->is_member_sorted($array, $key);
	}
	
	// -- MUTATION 1 - IS_MEMBER -- 
	public function is_member_mutant_1($array, $key){
		// sort array
		$array = $this->sort_int_array($array);
		
		//check membership
		return $this->is_member_sorted_mutant_1($array, $key);
	}
	
	// -- MUTATION 2 - IS_MEMBER -- 
	public function is_member_mutant_2($array, $key){
		// sort array
		$array = $this->sort_int_array($array);
		
		//check membership
		return $this->is_member_sorted_mutant_2($array, $key);
	}
	
	// -- MUTATION 3 - IS_MEMBER -- 
	public function is_member_mutant_3($array, $key){
		// sort array
		$array = $this->sort_int_array_mutant_1($array);
		
		//check membership
		return $this->is_member_sorted($array, $key);
	}
	
	// -- MUTATION 4 - IS_MEMBER -- 
	public function is_member_mutant_4($array, $key){
		// sort array
		$array = $this->sort_int_array_mutant_1($array);
		
		//check membership
		return $this->is_member_sorted_mutant_1($array, $key);
	}
	
	// -- MUTATION 5 - IS_MEMBER -- 
	public function is_member_mutant_5($array, $key){
		// sort array
		$array = $this->sort_int_array_mutant_1($array);
		
		//check membership
		return $this->is_member_sorted_mutant_2($array, $key);
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