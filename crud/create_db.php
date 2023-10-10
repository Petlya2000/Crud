<?php

if(isset($_POST['save'])){

// connect to database
include 'conn.php';

// capture data from form
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];

// input data to database
mysqli_query($conn,"insert into employees(id,name,address ,salary) values('$id','$name','$address','$salary'") or die(mysqli_error($conn));

// redirect page to index.php
header("location:index.php");

}
?>
