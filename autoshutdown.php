<?php
file_get_contents("http://localhost/cmd.php?p=0"); //initialization
sleep(5);
$url="http://localhost/p.txt";
echo $p=file_get_contents($url); // Read the instructions of shutdown, the one means that shutdown computer now
while (1)
{
	if ($p == 1)
       system("shutdown -s -t 0");
	else
	   $p=file_get_contents($url);
	sleep(10);
}
?>
