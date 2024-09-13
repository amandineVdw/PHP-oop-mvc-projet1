<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    // include 'includes/newclass.inc.php';
    require 'includes/person.inc.php';
    $pet01 = new Person();
    echo $pet01->first;
    ?>
</body>

</html>