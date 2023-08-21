<?php 
$longText = $_GET['words'];
$smallText = $_GET['badword'];
$newString = str_replace($smallText, '***', $longText);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<h1>
    <?php 
    echo $longText;
    echo strlen(trim($longText));
    echo '<br>';
    echo $newString;
    echo strlen(trim($newString));
    ?>
</h1>
</body>
</html>
