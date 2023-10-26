<?php
    $user = "Aung Aung";
    $admin = "Nyan Win Naing";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User name is <?php echo $user; ?></h1>

    <?php
        if($admin == "Nyan Win Naing") {
    ?>
    <h1>Admin name is <?php echo $admin; ?></h1>
    <?php   
    }
    ?>



</body>
</html>