<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $users = [
            [
                "name" => "aungaung",
                "age" => 25,
                "isAdmin" => true,
            ],
            [
                "name" => "mgmg",
                "age" => 21,
                "isAdmin" => true,
            ],
            [
                "name" => "susu",
                "age" => 30,
                "isAdmin" => false,
            ]
        ];

        foreach($users as $user) 
        {
            // print_r($user["name"]." ");
            if($user["isAdmin"] == true) 
            {
    ?>
            <h1>adminName is <?php echo $user["name"]; ?></h1>
            <h1>adminAge is <?php echo $user["age"]; ?></h1>
            <hr>
    <?php
            }
        }
    ?>
</body>
</html>