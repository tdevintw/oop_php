<?php
require 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$newUser = new crud();
$newUser->updatUser("yassir" , "aitel@gmail.com" , 1);
?>
</body>
</html>