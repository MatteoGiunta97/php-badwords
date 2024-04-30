<?php 
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];
$censuredParagraph = str_replace($badWord, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENSOR</title>
</head>
<body>
    <!-- Stampo il paragrafo e la sua lunghezza -->
    <p>
        <h1>Paragraph:</h1>
        <?php echo $paragraph; ?>
        <h2>Length: <?php echo strlen($paragraph); ?> </h2>
    </p>
    <hr>
    <!-- Sostituisco la parola da censurare con asterischi -->
    <p>
        <h1>Censured Paragraph:</h1>
        <?php echo $censuredParagraph; ?>
        <h2>Length: <?php echo strlen($censuredParagraph); ?> </h2>
    </p>
</body>
</html>