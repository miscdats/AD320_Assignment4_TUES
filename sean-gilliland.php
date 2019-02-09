<?php

require('testData.php');

$data = get2dArray();

?>

<!doctype html>
<html lang="en">
<head>
    
<meta charset="utf-8" />
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Assignment 4" />
<link rel="stylesheet" href="style.css">
    
<title>Sean G. Assignment 4</title>
</head>

<body>

  <div class="site-wrapper">
    <div class="content-wrapper">
    <?php foreach($data as $key => $value): ?>
      <div class="data-container"><h3><?php echo $key ?></h3>
      <ul>
      <?php foreach($value as $val): ?>
      <li><?php echo $val ?></li>
      <?php endforeach; ?>
      </ul>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</body>

<?php //this change is to test setting upstream by "git branch --set-upstream-to" method as git push --set-upstream is deprecated. ?>