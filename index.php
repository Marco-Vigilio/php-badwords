<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>PHP Badwords</h1>
    <form action="server.php" method="GET">
        <label for="">Insert your paragraph</label>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
        <label for="">Insert word to censor</label>
        <input type="text" name="word" id="word" placeholder="Word to censor">
        <input type="submit" value="Invia">
    </form>
</body>

</html>