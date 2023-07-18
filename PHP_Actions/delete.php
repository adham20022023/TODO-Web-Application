<?php
if($_SERVER['REQUEST_METHOD']=='POST'):
    require 'functions.php';
    if(isset($_POST['delete'])){
        $id=$_POST['id'];
        deletetask($id);
    }
endif;
header("location:../index.php");






?>