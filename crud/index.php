<!DOCTYPE html>
<html>
<head>
        <title>Simple CRUD</title>
</head>


<!-- javascript script to notifies delete one data  -->
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>

<!-- Color the website background -->
<body style="background-color:powderblue;">

<center>

    <h2>SIMPLE CRUD PHP - MariaDB</h2>
    <br/>
    <h3>Empolyees</h3>
    <a href="create.html">+ ADD SERVER</a>
    <br/>
    <br/>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Salary</th>
        <th>Action</th>
    </tr>
        <?php
        include 'conn.php';
        $no = 1;
        #Query database to display data
        $query = mysqli_query($conn,"select * from employees") or die(mysql_error());;

        # If there is no data then there will be a statement
        if(mysqli_num_rows($query) == 0) {
           echo '<tr style="background-color: #ff4d4d"><td colspan="8"><center>No Data in Database!</center></td></tr>';
           }
           else{

             while($data = mysqli_fetch_array($query)){
        ?>
           <tr>
               <td><?php echo $data['id']; ?></td>
               <td><?php echo $data['name']; ?></td>
               <td><?php echo $data['address']; ?></td>
               <td><?php echo $data['salary']; ?></td>
               
               <td>
                  <a href="update.php?id=<?php echo $data['id']; ?>">EDIT</a>&nbsp;&nbsp;
                  <a href="delete.php?id=<?php echo $data['id']; ?>" onclick="return checkDelete()">DELETE</a>
               </td>
           </tr>
        <?php
            }
            }
        ?>
        </table>
</center>
</body>
</html>
