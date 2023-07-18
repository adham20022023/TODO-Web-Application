<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    require 'functions.php';
    if(isset($_POST['check'])){
        $id=$_POST['id'];
        $status=$_POST['status'];
        check($id,$status);
    }
}
header("location:../index.php");
?>