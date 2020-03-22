<?php
	
	echo "\n\n";
	echo "	Author   : MarsHall\n";
	echo "	Team     : AnarchoXploit\n";
	echo "	Tool     : Mass Add Http\n\n";
	echo "	Save As : (example.txt) : ";
	$save = trim(fgets(STDIN));
	echo "\n\n";

$list = file_get_contents("t.txt");

$ex = explode("\n", $list);

touch("$save");
foreach($ex as $domain){

	echo "http://$domain\n";
	$o = fopen("$save", 'a');
	fwrite($o,"http://$domain\n");
	fclose($o);
}
	echo "\nSaved Successfully : $save\n";

?>