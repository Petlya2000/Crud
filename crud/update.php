<!DOCTYPE html>
<html>
<head>
        <title>Simple CRUD</title>
</head>
<body style="background-color:powderblue;">

 <script>
                function handleData()
{
    var form_data = new FormData(document.querySelector("form"));

    if(!form_data.has("app[]"))
    {
        document.getElementById("chk_option_error").style.visibility = "visible";
      return false;
    }
    else
    {
        document.getElementById("chk_option_error").style.visibility = "hidden";
      return true;
    }

}

        </script>



<center>

        <h2>SIMPLE CRUD PHP - MariaDB</h2>
        <br/>
        <h3>EDIT Employees</h3>

        <?php
        include 'conn.php';
        $id = $_GET['id'];
        $query = mysqli_query($conn,"select * from employees where id='$id'");
        while($data = mysqli_fetch_array($query)){
                $data_app=explode(', ', $data['app']);
                ?>
           <form method="post" action="update_db.php" onsubmit="return handleData()">
                <table cellpadding="3" cellspacing="0">

                     <!-- Edit the hostname field -->
                     <tr>
                         <td>Hostname</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <td>
                           <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                           <input type="text" name="name" value="<?php echo $data['name']; ?>">
					<input type="hidden" name="address" value="<?php echo $data['id']; ?>">
                           <input type="text" name="salary" value="<?php echo $data['name']; ?>">
                         
                         </td>
                     </tr>
                     <!-- Create update button -->
                     <tr>
                         <td></td>
                         <td><input type="submit" value="Update">&nbsp;&nbsp;<button onclick="goBack()">Go Back</button></td>
                     </tr>

                </table>
           </form>
                <?php
        }
        ?>

</body>
</html>
