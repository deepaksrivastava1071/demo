<?php 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$conn = mysqli_connect("localhost","root","","test") or die("connection failed");

$sql = "INSERT INTO student(firstname, lastname) VALUES('{$first_name}','{$last_name}')";

// $result =  or die("SQL Queary failed");

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}