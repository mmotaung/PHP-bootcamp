#!/usr/bin/php
<?php

if (count($argv) == 2)
{
$spaces = trim(preg_replace('/\s+/', ' ', $argv[1]));
echo "$spaces";
}
?>
