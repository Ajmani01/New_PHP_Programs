<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"kirti vardhan ajmani";
    if(isset($_COOKIE($_COOKIE_name)))
    {
        echo"Cookie is created";
    }
    else{
        echo $_COOKIE[$_COOKIE_name];
    }
    ?>
</body>
</html>
