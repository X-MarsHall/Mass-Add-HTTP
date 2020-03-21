<?php

error_reporting(0);
	
	echo "\n\n";
	echo "	Author   : MarsHall\n";
	echo "	Team     : AnarchoXploit\n";
	echo "	Tool     : Mass Tambahin Http\n\n";

$list = file_get_contents("t.txt");

$ex = explode("\n", $list);

foreach($ex as $domain){
	
	echo "http://".$domain."\n";
}

?>
