<?php

	$con = mysql_connect("localhost", "root", "");
	if(!$con){
		die('Could not connect:' . mysql_error());
	}
	mysql_select_db("sweethome", $con);

	mysql_query("set names utf8");

//	echo "succeed";
?>
