<?php
include 'login.php';
if(isset($_POST['register'])){
    $user=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $check="SELECT * From store where email='$email'";
    $result=$conn->query($check);
    if($result->num_rows>0){
        echo"Email already exist !";
    }
    else{
        $insert="INSERT INTO store(username,email,password) VALUES('$user','$email','$password')";
        if($conn->query($insert)==TRUE){
            header("location:login.php");
        }
        else{
            echo "Error:".$conn->error;
        }
    }
}






?>