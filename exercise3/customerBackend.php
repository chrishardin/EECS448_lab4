<?php



$username = $_POST["username"];
$pwd = $_POST["pwd"];
$ship = $_POST["shipping"];
$i1 = $_POST["i1"];
$i2 = $_POST["i2"];
$i3 = $_POST["i3"];

echo "<h1> RECEIPT" . "<br></h1>";

echo "<h2> Hello, " . $username . "</h2>";
echo "<h2> Your password was: " . $pwd . "<br><br></h2>";

echo "<h4>Epsom Salt Foot Gel, Quantity: $i1" . "  Total: $". $totali1 = $i1 * 40 . "<br></h4>";

echo "<h4>Oral-B Floss Picks, Quantity: $i2" . "  Total: $". $totali2 = $i2 * 75 . "<br></h4>";

echo "<h4>Oxford Dictionary, Quantity: $i3" . "  Total: $". $totali2 = $i3 * 480 . "<br></h4>";

if ($ship == "three") {
  $cost = 5;
  echo "<h4>Shipping Method: 3 Day" . "<br><br></h4>";
} elseif ($ship == "overnight") {
  $cost = 50;
  echo "<h4>Shipping Method: Overnight" . "<br><br></h4>";
} else {
  echo "<h4>Shipping Method: 7 Day Shipping" . "<br><br></h4>";
  $cost = 0;
}


echo "<h2>Total: $" . $total = $totali1 + $totali2 + $totali3 + $cost . "</h2>";

?>
