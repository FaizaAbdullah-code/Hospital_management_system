
 
<?php

include'configure.php'; 

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 
 }

 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
//  $conn = mysqli_connect("localhost", "root", "");
//  //Selecting Database
//  $db = mysqli_select_db($conn, "userpass");

 $query = mysqli_query($con, "SELECT * FROM users WHERE pass='$pass' AND user='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: dashboard.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($con); // Closing connection
 }
}
 
?>
