<?php

require('testData.php');

$testDataArr = json_encode(get2dArray());
//echo $testDataArr;
$array = get2dArray();

foreach($array as $key=>$val){ 
    
  echo "<div><h3>";
  echo $key . "</h3><ul>";
  
  foreach($val as $k=>$v){ 

      echo "<li>" . $v . "</li>";
  }
  
  echo "</ul></div>";
  
}





?>