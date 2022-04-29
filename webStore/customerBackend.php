<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    $laptop = $_POST["laptops"];
    $tablet = $_POST["tablets"];
    $tv = $_POST["tvs"];
    $shipping = $_POST["ship"];

    echo '<link rel="stylesheet" href="style.css" type="text/css"/>';
    echo "<h1>Welcome $email! Thank you for your purchase!</h1>";
    echo "<p>Your password: $password</p><br><br>";
    echo '<h2 style="text-decoration: underline">Receipt</h2>';


    function amount($quantity,$cost)
    {
        return $quantity * $cost;
    }

    $laptopAmount = amount($laptop,2000);
    $tabletAmount = amount($tablet,1100);
    $tvAmount = amount($tv,250);

    if($shipping == "Free Shipping")
    {
        $shipAmount = 0;
    }
    else if($shipping == "Overnight Shipping")
    {
        $shipAmount = 50;
    }
    else
    {
        $shipAmount = 5;
    }

    $total = $shipAmount + $laptopAmount + $tabletAmount + $tvAmount;

    echo "       <table>
    <tr>
        <th></th>
        <th>Quantity</th>
        <th>Cost Per Item</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <th>Laptop(s)</th>
        <th>$laptop</th>
        <th>$2000</th>
        <th>$$laptopAmount</th>
    </tr>
    <tr>
        <th>Tablet(s)</th>
        <th>$tablet</th>
        <th>$1100</th>
        <th>$$tabletAmount</th>
    </tr>
    <tr>
        <th>4K TV(s)</th>
        <th>$tv</th>
        <th>$250</th>
        <th>$tvAmount</th>
    </tr>
    <tr>
        <th>Shipping</th>
        <th colspan='2'>$shipping</th>
        <th>$$shipAmount</th>
    </tr>
    <tr>
        <th colspan='3'>Total Cost</th>
        <th>$$total</th>
    </tr>
</table>";
?>