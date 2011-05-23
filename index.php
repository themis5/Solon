<?php
	$logs = fopen( ".git/logs/HEAD", "r" );
	$logs1 = file_get_contents( ".git/logs/HEAD" );
	echo $logs1;
?>
