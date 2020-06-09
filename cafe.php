<?php
$con = mysqli_connect("localhost", "waltonm", 'databa$e20', "waltonm_cafe");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error(); die();}
else {
    echo "connected to database";
}

$drink_query = "SELECT Customers.Fname, Customers.LName, Drinks.Item
FROM Customers, Orders, Drinks
WHERE Customers.FName = 'Bob'
AND Customers.LName = 'Smith'
AND Customers.CustomerID = Orders.CustomerID
AND Orders.DrinkID = Drinks.DrinkID;";

/* query the database*/
$drink_result = mysqli_query($con, $drink_query);
$drink_rows = mysqli_num_rows($drink_result);

if($drink_rows > 0) {
    echo "<p>there were ".$drink_rows." results!!";
}

else {
    echo "Sorry no results found.";
}
?>