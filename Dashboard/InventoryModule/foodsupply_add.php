<?php
include "../dbConnection/conn.php";

$productName = $_POST['productName'];
$productQuantity = $_POST['productQuantity'];
$productCategory = $_POST['productCategory'];

$sql = "INSERT INTO foodsupply (productName, productQuantity, productCategory) 
        VALUES ('$productName', '$productQuantity', '$productCategory')";

if ($conn->query($sql) === TRUE) {
    header("location: ../InventoryModule/FoodSupplyInventory.php?msg=Added new ingredient successfully!");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>