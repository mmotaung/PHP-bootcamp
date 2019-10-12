#!/usr/bin/php
<?php
$tab = implode(" ", $argv);
$tab = trim(preg_replace('/\s+/', ' ', $tab));
$tab = explode(" ", $tab);
$pro_nam = array_shift($tab);
sort($tab);
foreach($tab as $value)
{
	echo "$value\n";
}
?>
