<?php
require 'functions.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        $username=$_POST['name'];
        $password=$_POST['password'];
        create_user($username,$password);
        header("location:../login.php");
        exit();
    }

}







?>