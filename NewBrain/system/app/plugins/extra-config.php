<?php

/*
    Forgot to add this inside the folder, for making double events possible.
    Thanks kenji#5663 for reporting this issue.
	
	Add this code inside the brain-config.php file.
*/

$config['diamondEvent'] = false;

if ($config['diamondEvent'] == true) 
{
    $config['diamondTen'] = "20";
} 
else 
{
    $config['diamondTen'] = "10";
}
