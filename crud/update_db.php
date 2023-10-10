<?php
// connect to database
include 'conn.php';

// capture data from form
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];

// update data
mysqli_query($conn,"update empolyees set name ='$name ', address ='$address ', salary ='$salary' where id='$id'");

// redirect page to index.php
header("location:index.php");

?>
