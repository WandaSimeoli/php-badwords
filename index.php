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
    <form method="get" action="my_file.php">
        <textarea name="words" id="" cols="20" rows="8"></textarea>
        <input type="text" name="badword" id="">
        <button type="submit">Invia</button>
    </form>
</body>
</html>