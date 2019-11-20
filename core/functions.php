<?php

function env($key)
{
	$env = include "../core/env.php";
	return $env[$key];
}

function dd($cls)
{
	echo "<pre>";
	print_r($cls);
	echo "</pre>";
}
