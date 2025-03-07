<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Loop Example</title>
</head>
<body>

<h2>Let's list down a Number</h2>

    <form action="loop.php" method="post">
        <label for="number">Enter first number:</label>
        <input type="number" id="number" name="number"> 
        <br>
        <label for="number2"> Enter the last number</label>
        <input type="number" id="number2" name="number2">
        <input type="submit" value="Submit">
    </form>
    <div style="margin-top: 20px">
            <?php
                // Check if the form fields are empty
                if (empty($_POST['number']) || empty($_POST['number2'])) {
                    echo "<p style='color: red'> Please fill in the box correctly. </p>";
                } else {
                    // Get the input values
                    $number = $_POST['number'];
                    $number2 = $_POST['number2'];
                    
                    // Check if first number is less than second number
                    if ($number < $number2) {
                        // Display the range message
                        echo "This is the $number to $number2";
                        echo "<ul>";
                        // Loop through numbers and display them in a list
                        for($i = $number; $i <= $number2; $i++) {
                            echo "<li>$i</li>";
                        }
                        echo "</ul>";
                    } else if ($number > $number2) {
                        // Error message if first number is greater
                        echo "The first number should be less than the second number";
                    } else {
                        // Error message for invalid input
                        echo "<p style='color: red'> You have entered an invalid number </p>";
                    }
                }

        /*

In this example, we have a form that asks the user to input two numbers. 
The PHP script checks if the form fields are empty. 
If they are empty, it will echo a message "Please fill in the box correctly."

If they are not empty, the script gets the input values and checks if the first number is less than the second number.
If it is true, it will display "This is the $number to $number2".

If it is false, the script will check if the second condition is true.
If the first number is greater than the second number, 
It will display a message "The first number should be less than the second number"

And lastly, If the user input is not a number(int).
It will display a error message, " You have entered an invalid number ".

We uses <li></li> to display the number in bullet form. 
we uses <ul> to display in order list.
        */
            ?>
    </div>
</body>
</html>