<?php
include "../dbConnection/conn.php";

$itemName = $_POST['itemName'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO equipment (itemName, quantity) VALUES ('$itemName', '$quantity')";

if ($conn->query($sql) === TRUE) {
    header("location: ../InventoryModule/EquipmentInventory.php?msg=Added new equipment successfully!");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>