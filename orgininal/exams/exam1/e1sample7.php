<?php

	$items = array("milk", "eggs", "cheese", "bacon");
	
	$person = array("name"=>"joe blow", "email"=>"jblow@madisoncollege.edu", "id"=>1);
	
	foreach($person as $attr=>$val) {
		printf("key: %s<br />value: %s<br /><hr />", $attr, $val);
	}
	
	$i = 0;
	while($i < count($items)) {
		echo $items[$i];
		echo "<br />";
		$i++;
	}
	
?>
