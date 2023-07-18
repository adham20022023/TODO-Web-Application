<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    require 'functions.php';
    if(isset($_POST['check'])){
        $id=$_POST['id'];
        check($id);
    }
}
header("location:../index.php");
?>