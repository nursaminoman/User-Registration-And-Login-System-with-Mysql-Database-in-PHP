<?php
session_start();
//db
require 'db.php';
//REQUEST_METHOD
if($_SERVER['REQUEST_METHOD']=="POST"){

//from data 
$email = $_POST["email"];
$password = $_POST["password"];



            //validation
            if(empty($email)){

            $_SESSION['email']="<span class='text-danger'>Please Enter Email</span>";
            header('Location:../login.php');

              }
              else{

                    if(empty($password)){
                    $_SESSION['password']="<span class='text-danger'>Please Enter Password</span>";
                    header('Location:../login.php');
                    }
                    else{
                    $check="SELECT count(*) AS name,email,password FROM user WHERE email='$email'";
                    $query=mysqli_query($db,$check);
                    $assoc=mysqli_fetch_assoc($query);
                    if($assoc['email']==$email && $assoc['password']==$password){
                     $_SESSION['email']=$assoc['email'];
                     $_SESSION['name']=$assoc['name'];
                     header('Location:../index.php');
                    }
                    else{
                    $_SESSION['danger']="<span class='text-danger'>Please Check Your Email & Password</span>";
                    header('Location:../login.php');
                    //echo $email.$password;
                    }
                    }
             }


}
else{
     
    header('Location:../error.php');
}
?>