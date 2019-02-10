<?php
require "testData.php";

$data = get2dArray();
foreach($data as $key => $array){
    echo"<div><h3>$key</h3>";
    echo"<ul>";
    foreach($array as $value){
        echo "<li>$value</li>";
    }
    echo"</ul></div>";
}

?>
