<?php
require 'config.php';
function addtask($task){
    $active='NO';
    global $conn;
    $sql="insert into tasks(task,status) values(?,?);";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ss",$task,$active);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("location:../index.php");
}
function view_tasks(){
    global $conn;
    $sql="select * from tasks";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result(); // get a mysqli_result object
    if($result->num_rows>0){
        $tasks=array();
        while($row=$result->fetch_assoc()){ // use fetch_assoc() on the mysqli_result object
            $tasks[]=$row;
        }
        $stmt->close();
        $conn->close();
        return $tasks;
    }
}
function check($id){
    global $conn;
    $sql="update tasks set status='YES' where id=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}
function deletetask($id){
    global $conn;
    $sql="delete from tasks where id=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}




?>