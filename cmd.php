<?php
$p=$_GET['p'];   //get the the instructions of shutdown, And save it in file. The one means that shutdown computer now

if ($p == 1)
{
	$fp=fopen("p.txt","w");
	fwrite($fp,"1");
	fclose($fp);
}
else
{
	$fp=fopen("p.txt","w");
	fwrite($fp,"0");
	fclose($fp);
}
?>
