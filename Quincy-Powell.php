<html>
<head>
<title>AD320 IA4 Quincy Powell</title>
</head>

<body>
<?php
require_once 'testData.php';
$arrayData = get2dArray();
foreach($arrayData as $arrayKey => $arrayRow) {
    echo '<div>' . '<h3>' . $arrayKey . '</h3>';
    echo '<ul>';
    foreach($arrayRow as $arrayElement) {
        echo '<li>' . $arrayElement . '</li>';
    }
    echo '</ul>';
    echo '</div>';
}
?>
</body>

</html>
