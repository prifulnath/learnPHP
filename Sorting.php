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
		print_r($arrValues);
		print('test');
	}
}

$objSort = new Sort();
$objSort->bubbleSort([5,2,4,7,6,8]);