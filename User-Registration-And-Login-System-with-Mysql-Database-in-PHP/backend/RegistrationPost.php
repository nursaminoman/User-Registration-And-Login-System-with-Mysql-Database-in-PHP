<?php
session_start();
//db
require 'db.php';
//REQUEST_METHOD
if($_SERVER['REQUEST_METHOD']=="POST"){

//from data 
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];



//validation
    if(empty($name)){
    $_SESSION['name']="<span class='text-danger'>Please Enter Full Name</span>";
    header('Location:../registration.php');
    }
    else{
         
            if(empty($email)){

            $_SESSION['email']="<span class='text-danger'>Please Enter Email</span>";
            header('Location:../registration.php');

              }
              else{

                    if(empty($password)){
                    $_SESSION['password']="<span class='text-danger'>Please Enter Password</span>";
                    header('Location:../registration.php');
                    }
                    else{

                    //datainsert to Database
                    $insert="INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
                    $query=mysqli_query($db,$insert);
                    if($query){
                    $_SESSION['success']="<span class='text-success'>Registration successful</span>";
                    header('Location:../registration.php');
                       //echo $name.$email.$password;
                    }
                    else{

                    $_SESSION['success']="<span class='text-danger'>Registration Fail</span>";
                    header('Location:../registration.php');
                       //echo $name.$email.$password;
                    }
                }
               }
    }


}
else{
     
    header('Location:../error.php');
}
?>