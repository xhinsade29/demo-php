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

            if($number >= 1 && $number <= 5) {
                if($number == 4 || $number == 2) {
                    $isExpensive = true;
                    echo "<p style='color: red'>This is an expensive item!</p>";
                }

                if(!$isExpensive) {
                    echo "<p style='color: green'>This is an affordable item!</p>";
                }

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
        ?>
    </div>
</body>
</html>