<?php

$name = "Kristine L. Lopez";
$status = "2nd year student";
$course = "Bachelor of Science in Information Technology";  

echo "Hi, My name is $name. <br>";
echo " I am a $status. <br>";
echo "I am taking up $course. <br>";
echo "<br>";
echo "<br>";


/*Output

Hi, My name is Kristine L. Lopez.
I am a 2nd year student.

*/

//example

$customer_name = "chichi";
$item1 = "paper";
$item2 = "pen";
$item3 = "notebook";
$quantity = 3;
$paper_price = 10.50;
$pen_price = 5.50;
$notebook_price = 8.00;
$total = $quantity * $paper_price + $quantity * $pen_price + $quantity * $notebook_price;

echo "$customer_name ordered $quantity $item1, $quantity $item2, and $quantity $item3. <br>";
echo "$item1 costs $paper_price each. <br>";
echo "$item2 costs $pen_price each. <br>";
echo "$item3 costs $notebook_price each. <br>";
echo "The total amount is $total. <br>";

/*Output

chichi ordered 3 paper, 3 pen, and 3 notebook.
paper costs 10.5 each.
pen costs 5.5 each.
notebook costs 8 each.
The total amount is 72.

*/
?>