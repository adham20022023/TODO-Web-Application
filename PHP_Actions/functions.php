<?php
require 'config.php';
function addtask($task,$user_id){
    $active=0;
    global $conn;
    $sql="insert into tasks(task,status,user_id) values(?,?,?);";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("sbi",$task,$active,$user_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("location:../index.php");
}
function view_tasks($id){
    global $conn;
    $sql="select * from tasks where user_id=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("i",$id);
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
function check($id,$status) {
    global $conn;
    $status=!$status; // toggle
    // Update database record with new status
    $sql = "UPDATE tasks SET status = ? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters (replaced values above) and execute update
    $stmt->bind_param('si', $status, $id);
    $stmt->execute();
    
    // Close all statements
    $stmt->close();
    $conn->close();
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
function check_login($username,$password ){
    global $conn;
    $sql= "select * from users where username=? and password=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param('ss',$username,$password);
    $stmt->execute();
    $result = $stmt->get_result(); // get a mysqli_result object
    $stmt->close();
    $conn->close();
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $id= $row['userid'];
        return $id;
    }
    else{
        return false;
    }
}
function create_user($username,$password){
    global $conn;
    $sql="insert into users(username,password) values(?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}




?>