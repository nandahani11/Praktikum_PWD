<?php
function base_url($a)
{
	$base_url = $_SERVER['SERVER_NAME'];
	$root = 'ResponsiPWD';

	return "http://" . $base_url . "/" . $root . "/" . $a;
}
