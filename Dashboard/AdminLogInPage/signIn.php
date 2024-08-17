<?php
// Establish connection to the database
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP, usually empty
$database = "reservation"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// if(isset($_POST['signUp'])){
//     $firstName = $_POST['fName'];
//     $lastName = $_POST['lName'];
//     $email = $_POST['email'];
//     $phoneNum = $_POST['phoneNum'];
//     $password = $_POST['password'];
//     $password = md5($password);

//      $checkEmail="SELECT * FROM userlogin WHERE email='$email'";
//      $result = $conn->query($checkEmail);
//      if($result->num_rows>0){
//         echo "Email Address Already Exists !";
//      }
//      else{
//         $insertQuery="INSERT INTO userlogin(firstName,lastName,email,phoneNum,password)
//                        VALUES ('$firstName','$lastName','$email','$phoneNum','$password')";
//             if($conn->query($insertQuery)==TRUE){
//                 header("location: ../html/Registration.php");
//             }
//             else{
//                 echo "Error:".$conn->error;
//             }
//      }
// }

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM userlogin WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: ../DashboardPage/Dashboard.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }
}
?>