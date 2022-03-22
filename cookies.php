<?php
$cookieCounter = intval($_COOKIE["cookieCounter"]);
$cookieCounter++;

setcookie("cookieCounter", $cookieCounter);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cookies!</title>
</head>

<body>
    <h1>My cookies:</h1>
    <h2><?php for ($i = 0; $i < $cookieCounter; $i++) echo "🍪"; ?></h2>
</body>

</html>
