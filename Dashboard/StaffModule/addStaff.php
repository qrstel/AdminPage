<?php 
include "../dbConnection/conn.php";

if(isset($_POST['submit'])){
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $password = $_POST['password'];
    $password = md5($password);

     $checkEmail="SELECT * FROM userlogin WHERE email='$email'";
     $result = $conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO userlogin(firstName,lastName,email,phoneNum,password)
                       VALUES ('$firstName','$lastName','$email','$phoneNum','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: ../StaffModule/Staff.php?msg=Created new user successfully!");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
}
?>