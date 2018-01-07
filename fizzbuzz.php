<?php

/*
 * Author: 		Benjamin Payne (trixtur@gmail.com)
 * Date Modified: 	6/14/2017
 *
 * FizzBuzz function. This will later be the Function Under Test. 
 */

require_once('container.class.php');

/*
 * Function: fizzbuzz
 * Purpose: execute the function specifiedin the User Story.
 * Parameters: Accepts a reference to a fizzbuzz_container object.
 * Result: Modifies the result of the fizzbuzz_container object based upon User Acceptance Criteria.
 */
function fizzbuzz (container &$fizzbuzz_container) {
	// Handles Item 1 from the UAC.
	if (($fizzbuzz_container->get_value() % 3) == 0) $fizzbuzz_container->set_result('fizz');
	// Handles Item 2 from the UAC.
	if (($fizzbuzz_container->get_value() % 5) == 0) $fizzbuzz_container->append_result('buzz');
	// Handles the additional considerations specified in the UAC.
	if ((($fizzbuzz_container->get_value() % 3) != 0) && (($fizzbuzz_container->get_value() % 5) != 0)) $fizzbuzz_container->append_result($fizzbuzz_container->get_value());
}
