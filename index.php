<?php 

$testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veniam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veniam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veniam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veniam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veniam!";

$censura = $_GET['censura']
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-badwords</title>
</head>
<body>
    
<p>
    <?php echo $testo ?>
</p>
<p>
   La lunghezza del mio paragrafo è <?php echo strlen($testo) ?>
</p>
<p>
   Il testo censurato è : <br> <?php echo str_replace($censura, "***", $testo) ?>
</p>
<p>
   La lunghezza del mio paragrafo è <?php echo strlen(str_replace($censura, "***", $testo)) ?>
</p>
</body>
</html>