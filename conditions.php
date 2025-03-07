<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Selection</title>
</head>
<body>
    <h2>Available Items:</h2>
    <ol>
        <li>Banana Chips - $10.10</li>
        <li>Soda - $15.10</li>
        <li>Chicharon ni Mang Juan - $7.10</li>
        <li>Chiffon Cake - $20.10</li>
        <li>Marshmallow - $5.10</li>
    </ol>

    <form action="conditions.php" method="post">
        <label for="number">Enter item number (1-5): </label>
        <input type="number" id="number" name="number" min="1" max="5">
        <input type="submit" value="Select Item">
    </form>

    <div style="margin-top: 20px">
        <?php
        if(isset($_POST['number'])) {
            $item1 = 'banana chips';
            $item2 = 'soda';
            $item3 = 'chicharon ni mang juan';
            $item4 = 'chiffon cake';
            $item5 = 'marshmallow';

            $item1_price = 10.10;
            $item2_price = 15.10;
            $item3_price = 7.10;
            $item4_price = 20.10;
            $item5_price = 5.10;

            $number = $_POST['number'];
            $total = 0;
            $isDiscount = false;
            $isExpensive = false;

            // Using && (AND) operator: Both conditions must be true
            // Checks if number is between 1 AND 5 inclusive
            if($number >= 1 && $number <= 5) {
                
                // Using || (OR) operator: At least one condition must be true
                // Checks if item is number 4 OR number 2 (expensive items)
                if($number == 4 || $number == 2) {
                    $isExpensive = true;
                    echo "<p style='color: red'>This is an expensive item!</p>";
                }

                // Using ! (NOT) operator: Reverses a boolean value
                // Shows message if item is NOT expensive
                if(!$isExpensive) {
                    echo "<p style='color: green'>This is an affordable item!</p>";
                }

                // Select item based on number input
                if($number == 1){
                    echo "Item $number: $item1 costs $${item1_price}<br>";
                    $total = $item1_price;
                }
                else if($number == 2){
                    echo "Item $number: $item2 costs $${item2_price}<br>";
                    $total = $item2_price;
                }
                else if($number == 3){
                    echo "Item $number: $item3 costs $${item3_price}<br>";
                    $total = $item3_price;
                }
                else if($number == 4){
                    echo "Item $number: $item4 costs $${item4_price}<br>";
                    $total = $item4_price;
                }
                else if($number == 5){
                    echo "Item $number: $item5 costs $${item5_price}<br>";
                    $total = $item5_price;
                }
                echo "<br>Total cost: $${total}";
            } else {
                echo "Please enter a number between 1 and 5";
            }
        }

/*

In this example, we have a list of items with corresponding prices. 
The user can select an item by entering a number from 1 to 5. 
The selected item and its price will be displayed along with a message indicating if it is an expensive or affordable item.

we have a form that takes a number input from the user. 
When the form is submitted, the PHP code checks if the number is within the range of 1 to 5.

If the number is within the range, the code then checks if the selected item is an expensive item (item 2 or item 4).
If the selected item is expensive, a message is displayed in red indicating that it is an expensive item.   
If the selected item is not expensive, a message is displayed in green indicating that it is an affordable item.

The code then displays the selected item and its price based on the user input.
The total cost of the selected item is calculated and displayed.

If the number is not within the range of 1 to 5, a message is displayed asking the user to enter a number between 1 and 5.

We used logical operators such as && (AND), || (OR), and ! (NOT) to combine conditions and control the flow of the program based on the user input.
We also used conditional statements (if, else if) to select the item and calculate the total cost.
WE used isset() function to check if the form has been submitted and the number input is set.
WE used $_POST to get the number input from the form using the POST method.
*/

        ?>
    </div>
</body>
</html>

