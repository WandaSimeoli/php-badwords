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
        <label for="paragraph">
            Inserisci un paragrafo
        </label> 
        <div>
        <textarea name="words" id="paragraph" cols="30" rows="10" placeholder="Inserisci un paragrafo"></textarea>
        </div>
        <label for="badword">
            Inserisci la parola da censurare
        </label>
        <div>
        <input type="text" name="badword" id="badword" placeholder="Inserisci le parole da censurare">
        </div>
        <button type="submit">Invia</button>
    </form>
</body>
</html>