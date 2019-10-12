#!/usr/bin/php
<?php
if ($argc > 1)
{
	$argv[1] = trim(preg_replace('/\s+/', ' ', $argv[1]));
	$tab = explode(" ", $argv[1]);
	$start = array_shift($tab);
	$tab = implode(" ", $tab);
	if (!empty($tab))
		echo "$tab ";
		echo "$start\n";
}
?>
