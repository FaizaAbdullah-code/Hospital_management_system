<?php

echo $id = $_GET['id'];

//exit();
$con = mysqli_connect('localhost','soluti23_feminbook','feminbook@123','soluti23_feminbook');
 $query = "UPDATE users SET isInactive=0 WHERE id = $id"; 
 
 


        $resulte = mysqli_query($con,$query);

        if($resulte){
          echo "<script> alert('User Has Been Activated ') </script>";
          header('Location: http://admin.feminbook.com/view_cat.php');
        }
        else{
          echo "<script> alert('Sorry..!! Something Went Wrong') </script>";
        }


