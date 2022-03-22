<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sample form</title>
</head>

<body>
    <h1>Sample form</h1>
    <form method="post">
        Username <input type="text" name="username"><br>
        Password <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "Welcome $username!";
    }
    ?>
</body>

</html>
