<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

    for ($i=0; $i < 50; $i++) { 
        echo("<div style='width: 10px; height: 10px; background-color: rgb(".($i*5).','.($i*5).','.($i*5).");'></div>");
    }

    ?>

</body>
</html>