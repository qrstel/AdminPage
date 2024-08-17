<?php 
include "../dbConnection/conn.php";

if (isset($_POST['submit'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];

    // Ensure $id is set and sanitized
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare the SQL query
        $sql = "UPDATE `userlogin` SET `firstName`='$firstName', `lastName`='$lastName', `email`='$email' WHERE `id`=$id";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: ../StaffModule/Staff.php?msg=Updated user's information successfully!");
            exit(); // Ensure no further code is executed after the redirect
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    } else {
        echo "ID is not set.";
    }
}
?>
