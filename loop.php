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
                if (empty($_POST['number']) || empty($_POST['number2'])) {
                    echo "<p style='color: red'> Please fill in the box correctly. </p>";
                } else {
                    $number = $_POST['number'];
                    $number2 = $_POST['number2'];
                    
                    if ($number < $number2) {
                        echo "This is the $number to $number2";
                        echo "<ul>";
                        for($i = $number; $i <= $number2; $i++) {
                            echo "<li>$i</li>";
                        }
                        echo "</ul>";
                    } else if ($number > $number2) {
                        echo "The first number should be less than the second number";
                    } else {
                        echo "<p style='color: red'> You have entered an invalid number </p>";
                    }
                }
            ?>
    </div>
</body>
</html>