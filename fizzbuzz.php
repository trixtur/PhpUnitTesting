<?php
require_once('container.class.php');

function fizzbuzz (container &$fizzbuzz_container) {
	if (($fizzbuzz_container->get_value() % 3) == 0) $fizzbuzz_container->set_result('fizz');
	if (($fizzbuzz_container->get_value() % 5) == 0) $fizzbuzz_container->append_result('buzz');
	if ((($fizzbuzz_container->get_value() % 3) != 0) && (($fizzbuzz_container->get_value() % 5) != 0)) $fizzbuzz_container->append_result($fizzbuzz_container->get_value());
}
