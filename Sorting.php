<?php

/**
 * Soritng class
 */
class Sort
{
	
	function __construct(){}

	/**
	 * Bubble sorting function
	 */
	public function bubbleSort($arrValues)
	{
		$numCount = count($arrValues);
		for ($i=$numCount-1; $i > 0; $i--) {
			for ($j=0; $j < $i; $j++) {
				if ($arrValues[$j] > $arrValues[$j+1]) {
					$numTemp         = $arrValues[$j];
					$arrValues[$j]   = $arrValues[$j+1];
					$arrValues[$j+1] = $numTemp;
				}
			}
		}
	}
}

$objSort = new Sort();
$objSort->bubbleSort([5,2,8,7,6,4,1]);