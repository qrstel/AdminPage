<?php 
include "../dbConnection/conn.php";

if (isset($_POST['submit'])) {
    $productName = $_POST['productName'];
    $productQuantity = $_POST['productQuantity'];
    $productCategory = $_POST['productCategory'];

    // Ensure $id is set and sanitized
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare the SQL query
        $sql = "UPDATE `foodsupply` SET `productName`='$productName', `productQuantity`='$productQuantity',
        `productCategory`='$productCategory' WHERE `id`=$id";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location: ../InventoryModule/FoodSupplyInventory.php?msg=Updated the ingredient successfully!");
            exit(); // Ensure no further code is executed after the redirect
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    } else {
        echo "ID is not set.";
    }
}
?>