<?php 
    // include 'includes/newclass.inc.php';
    require 'includes/person.inc.php';
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $person1 = new Person("Daniel", "blue", 28);    
    echo $person1->getName();
    ?>
</body>

</html>