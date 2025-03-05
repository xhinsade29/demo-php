<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicing using Post</title>
</head>
<body>
    <form action="post.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label for= "password">Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Submit">
    </form>
    <br>
    <br>
</html>

<?php

$name = $_POST['name'];
$password = $_POST['password'];

echo "Name: $name <br>";
echo "Password: $password";

?>