<?php 
include "../dbConnection/conn.php";

if (isset($_POST['submit'])) {
    $itemName = $_POST['itemName'];
    $quantity = $_POST['quantity'];

    // Ensure $id is set and sanitized
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare the SQL query
        $sql = "UPDATE `equipment` SET `itemName`='$itemName', `quantity`='$quantity' WHERE `id`=$id";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header('Location: ../InventoryModule/EquipmentInventory.php?msg=Updated the equipment successfully!');
            exit(); // Ensure no further code is executed after the redirect

        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    } else {
        echo "ID is not set.";
    }
}
?>
