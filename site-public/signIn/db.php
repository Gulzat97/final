<?php
$connection = mysql_connect("localhost", "root","");
$bd = mysql_select_db("site");
mysql_set_charset("utf8");
if(!$connection || !$bd)
{
	exit(mysql_error());
}
else echo "connected";

 	
?></br>