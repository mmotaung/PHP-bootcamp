#!/usr/bin/php
<?php

function ft_split($x)
{
	$str = explode(" ", $x);
	if ($x != NULL)
		sort($str);
	return($str);
}
?>
