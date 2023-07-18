<?php
require 'functions.php';
if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(isset($_POST['add'])){
        $task=$_POST['task'];
        if(!$task) {
            header("location:../index.php?error=red");
            exit();
        }
        session_start();
        $user_id=$_SESSION['userid'];
        addtask($task,$user_id);
        header("location:../index.php");
        exit();
    }
}
?>



?>