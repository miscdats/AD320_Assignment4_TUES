<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AD320 IA#4 Yun F. Sui</title>
</head>

<?php
    require('testData.php');

    $data = get2dArray();
    // error_log(print_r($data, TRUE));

    foreach($data as $key => $valarray){
        echo '
        <div>
            <h3>'.$key.'</h3>
            <ul style="list-style-type: disc;">';
            // error_log(print_r($valarray, TRUE));
        $arrlength = count($valarray);
        for($i = 0; $i < $arrlength; $i++){
            echo '<li>'.$valarray[$i].'</li>';
        }
        echo '
            </ul>
        </div>';
    }
?>