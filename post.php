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

// Key points about POST method:
// 1. Collects form data and sends to server
// 2. Data is not visible in URL
// 3. No size limitations
// 4. Best for sensitive data
// 5. Does not allow browser caching and bookmarking
// 6. Secure/encrypted

// Output Explaination
// If i submit the name : Chichi and password: "1234"
// The output would be Name: Chichi
// Password: 1234

// It uses post method to collect the data from the form and sends it to the server.
// It is more secure than get method because the data is not visible in the URL.


?>