<?php
require 'functions.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        $username=$_POST['name'];
        $password=$_POST['password'];
        $password2=$_POST['cpassword'];
        if($password != $password2){
            header("location:../register.php?error=1");
            exit();
        }
        $added=create_user($username,$password);
        if($added)
        header("location:../login.php");
        else
        header("location:../register.php?red");
        exit();
    }

}







?>