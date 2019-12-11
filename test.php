<?php
	echo ("hello world! \n");
	define ('LISA', "hello lisa \n");
	echo LISA;
	$test = 5.6;
	echo intval($test) . "\n";
	$testfalse = "";
	if (!$testfalse) {
		echo "that is false \n";
	}
	$family = array('father' => "lisa", 'mother' => "chuan", 'baby' => "pig");
	//var_dump($family);
	foreach($family as $value){
		echo $value . "\n";
	}
	asort($family);
	var_dump($family);
	echo $test++."\n";
	echo $test
	
?>
