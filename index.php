<?php 
$longText = $_GET['words'];
$smallText = $_GET['badword'];
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
    echo '<br>';
    echo $smallText;
    ?>
    </h1>
    <form method="get">
        <textarea name="words" id="" cols="20" rows="8"></textarea>
        <input type="text" name="badword" id="">
        <button type="submit">Invia</button>
    </form>
</body>
</html>