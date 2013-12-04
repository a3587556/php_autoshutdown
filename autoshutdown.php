<?php
$url="http://localhost/autoshutdown/p.txt";
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
