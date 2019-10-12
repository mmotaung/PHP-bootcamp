#!/usr/bin/php
<?php

while (1)
{
	print"Enter a number: ";
	$txt = trim(fgets(STDIN));
	if (feof(STDIN) == true)
		exit;
	if (!is_numeric($txt))
	{
		print ("'$txt'");
		print ("is not a number\n");
	}
	else
	{
		if ($txt % 2 == 0)
			print("The number $txt is even\n");
		else
			print ("The number $txt is odd\n");
	}
}

?>
