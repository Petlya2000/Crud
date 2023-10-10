<?php
// connect to database
include 'conn.php';

// get nim from url
$id = $_GET['id'];


// remove data from database
mysqli_query($conn,"delete from demo where id='$id'");

// redirect page to index.php
header("location:index.php");

?>
