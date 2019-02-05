<?php
require 'testData.php';

foreach(get2dArray() as $key => $value) {
    echo "<h3>" . $key . "</h3>";
    echo "<ul>";
    foreach($value as $list) {
        echo "<div><li>" . $list . "</li></div>";
    }
    echo "</ul>";
}
?>