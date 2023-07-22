<?php include 'header.php'; ?>
<div class="flex-container">
<div class="container">
    <div class="index">        
            <h2>All Records</h2> 
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php
                    include 'connection.php';
                    $sql = "SELECT * FROM  `user21`";
                    $query = mysqli_query($conn,$sql) or die("Query Failed");
                    if(mysqli_num_rows($query) > 0){
                        while($row = mysqli_fetch_assoc($query)){ 
                            // print_r($row);               
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td>
                        <a href="edit.php?id='<?php echo $row['id'] ?>'">Edit</a>
                        <a href="delete.php?id='<?php echo $row['id'] ?>'">Delete</a>
                    </td>
                </tr>
                <?php  }  } ?>                
            </table>      
    </div>
    </div>
</div>