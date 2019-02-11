<?php
	require('testData.php');

	$arr2d = get2dArray();
	foreach ($arr2d as $key => $values) {
		echo "<div><h3>{$key}</h3><ul>";
		foreach ($values as $value) {
			echo "<li>{$value}</li>";
		}
		echo "</ul></div>";
	}
?>
