<?php

$userID = $_POST["username"];
$password = $_POST["password"];
$mojito = $_POST["mojito"];
$ginFizz = $_POST["GinFizz"];
$oldFashioned = $_POST["oldFashioned"];
$shippingMethod = $_POST["ship"];



function determinShipCost ($userSpeed)
{
    if ($userSpeed == "Free 7 days")
    {
        return (0.00);
    }
    else if ($userSpeed == "$50.00 over night")
    {
        return (50.00);
    }
    else if ($userSpeed == "$5.00 three day")
    {
        return (5.00);
    }
}

echo "<h3>Uh.. I guess I have to welcome you?.. Welcome.. You're here to get drunk aren't you?</h3>";
echo "<h4>btw, your username is: $userID. And you entered this password: $password</h4>";

echo "<table style = 'width: 100%; height: 100%; text-align: center; border: 2px solid aqua; '>";

    echo "<tr>";
        echo "<td></td>";
        echo "<th>Quantity you ordered</th>";
        echo "<th>Cost Per Item</th>";
        echo "<th>Sub Total</th>";

    echo "</tr>";


    echo "<tr>";
        echo "<th> Mojito </th>";
        echo "<td style='background-color: #DFF1B7;'>" . $mojito . "</td>";
        echo "<td style='background-color: #DFF1B7;'>  $20.00  </td>";
        echo "<td style='background-color: #DFF1B7;'> $" . $mojito * 20.00 . "</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<th> Gin Fizz </th>";
        echo "<td style='background-color: #DFF1B7;'>" . $ginFizz . "</td>";
        echo "<td style='background-color: #DFF1B7;'>  $50.00  </td>";
        echo "<td style='background-color: #DFF1B7;'> $" . $ginFizz * 50.00 . "</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<th> Old Fashioned </th>";
        echo "<td style='background-color: #DFF1B7;'>" . $oldFashioned . "</td>";
        echo "<td style='background-color: #DFF1B7;'>  $10.00  </td>";
        echo "<td style='background-color: #DFF1B7;'> $" . $oldFashioned * 10.00 . "</td>";
    echo "</tr>";


    echo "<tr>";
        echo "<th> Shiping Option </th>";
        echo "<td colspan = 2 style = 'background-color: #F3C78A;'>" . $shippingMethod . "</td>";
        echo "<td style ='background-color: #F3C78A;'>  $" . determinShipCost($shippingMethod) . "</td>";
    echo "</tr>";


    echo "<tr>";
        echo "<th colspan = 3 style ='background-color: #FF5733;'> Grand Total </th>";
        echo "<th style ='background-color: #FF5733;'> $" . (($mojito * 20.00) + ($ginFizz * 50.00) + ($oldFashioned * 10.00) + determinShipCost($shippingMethod)) . "</th>";
    echo "</tr>";

echo "</table>";

?>
