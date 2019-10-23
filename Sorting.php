<?php

/**
 * Soritng class
 */
class Sort
{
	
	function __construct(){}

	/**
	 * The selection sort algorithm sorts an array 
	 * by finding the minimum element from unsorted part 
	 * and putting it at the beginning
	 */
	public function selectionSort($arrValues) {
		for ($i=0; $i < count($arrValues); $i++) {
			$minVal = $arrValues[$i];
			$minInd = $i;
			for ($j=$i+1; $j < count($arrValues); $j++) { 
				if ($arrValues[$j] < $minVal) {
					$minVal = $arrValues[$j];
					$minInd = $j;
				}
			}
			$arrValues[$minInd] = $arrValues[$i];
			$arrValues[$i] = $minVal;
		}
		return $arrValues;
	}

	/**
	 * Bubble Sort works by swapping the adjacent elements 
	 * if they are in wrong order.
	 */
	public function bubbleSort($arrValues) {
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
		return $arrValues;
	}
}

$objSort = new Sort();
$arrSorted = $objSort->bubbleSort([5,2,8,7,6,4,1]);    echo '<br>'; print_r($arrSorted);
$arrSorted = $objSort->selectionSort([5,2,8,7,6,4,1]); echo '<br>'; print_r($arrSorted);