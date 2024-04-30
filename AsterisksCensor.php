<?php 
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENSOR</title>
</head>
<body>
    <p>
        <h1>Paragraph:</h1>
        <?php echo $paragraph; ?>
        <h2>Length: <?php echo strlen($paragraph); ?> </h2>
    </p>
</body>
</html>