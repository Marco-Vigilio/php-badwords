<?php
    $par = $_GET["paragraph"];
    $word = $_GET["word"];

    $newPar = str_replace($word,"***",$par);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Result</h1>
    <div  class="contain">
        <h2>Paragraph</h2>
        <p>
            <?php echo $par;?>
            <?php echo strlen($par);?>
        </p>
            
        <h2>New paragraph</h2>
        <p>
            <?php echo $newPar;?>
            <?php echo strlen($newPar);?>
        </p>
    </div>
    

    
    
</body>
</html>