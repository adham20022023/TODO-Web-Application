<?php
require 'functions.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        $username=$_POST['email'];
        $password=$_POST['password'];
        $userid=check_login($username,$password);
        echo $userid;
        if($userid){
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['userid']=$userid;
            echo "hello";
            header("location:../index.php");
            exit();
        }
    else{
         header("location: ../login.php");
        exit();
    }
        
    }
}







?>