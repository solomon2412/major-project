<?php
$fullname=$_post['fullname'];
$rollnumber=$_post['rollnumber'];

$conn=new mysqli('localhost:8012','root','test');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}else{
        $stmt=$conn->prepare("insert into registration(fullname,rollnumber)values(?,?)");
        $stmt->bind_param("ss",$fullname,$rollnumber);
        $stmt->execute();
        echo "Registraion Successfull....";
        $stmt->close();
        $stmt->close();
    }
