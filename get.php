<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practising Get for feedback</title>
</head>
<body>
    
<form action="get.php" method="get">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br>
    <br>
    <label for = "feedback">Feedback:</label>
    <textarea id="feedback" name="feedback"></textarea>
    <input type="submit" value="Submit">
</form>

</body>
</html>

<?php

$name = $_GET['name'];
$feedback = $_GET['feedback'];
echo"<br>";
echo "Name: $name <br>";
echo "$name Feedback: $feedback";

?>