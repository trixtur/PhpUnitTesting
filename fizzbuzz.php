<?php

/*
 * Author: 		Benjamin Payne (trixtur@gmail.com)
 * Date Modified: 	6/14/2017
 *
 * FizzBuzz function. This will later be the Function Under Test. 
 */

require_once('container.class.php');

function fizzbuzz (container &$fizzbuzz_container) {
	if (($fizzbuzz_container->get_value() % 3) == 0) $fizzbuzz_container->set_result('fizz');
	if (($fizzbuzz_container->get_value() % 5) == 0) $fizzbuzz_container->append_result('buzz');
	if ((($fizzbuzz_container->get_value() % 3) != 0) && (($fizzbuzz_container->get_value() % 5) != 0)) $fizzbuzz_container->append_result($fizzbuzz_container->get_value());
}
