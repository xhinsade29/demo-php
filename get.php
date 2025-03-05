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

<br>
<br>

<form action ="get.php" method = "get" >
 <label  for = "search"> Search </label>
 <input type="text" id = "search" name = "search">
 <button type = "submit" > Search </button>
</form >


</body>
</html>

<?php

$name = $_GET['name'];
$feedback = $_GET['feedback'];
echo"<br>";
echo "Name: $name <br>";
echo "$name Feedback: $feedback";

//example for search bar
$search = $_GET['search'];
echo "You searched for: $search";

// Key points about GET method:
// 1. Collects form data and sends to server
// 2. Data is visible in URL
// 3. Has size limitations
// 4. Best for non-sensitive data
// 5. Allows browser caching and bookmarking
// 6. Not secure/encrypted


/*Output Explaination
 If i submit the name : Chichi and feedback: "I love the website"

 The output would be Name: Chichi
 Chichi Feedback: I love the website. 

It uses get method to collect the data from the form and sends it to the server.
The data is visible in the URL. Which is name=Chichi&feedback=I+love+the+website.
It it unsafe to use get method for sensitive data because it is not secure/encrypted and it is visible in the URL. 


We use $_GET to get the data from the form. 
$_GET is a superglobal variable that is used to collect form data after submitting an HTML form with method="get".

By submitting the form, the data is sent to the server and the server will process the data and display the output to the screen.
We use echo to output the data to the screen.
*/


?>