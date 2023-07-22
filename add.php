<?php include 'header.php'; ?>
<div class="flex-container">
    <div class="container">
        <div class="add">
            <h2>Add New Record</h2>
            <?php  
             if(isset($_POST['submit'])){          
            $username = $_POST['username'];
            $useremail = $_POST['useremail'];
            $userphone = $_POST['userphone'];
            $useraddress = $_POST['useraddress'];
            
            include 'connection.php';           
            $sql = "INSERT INTO `user21`(`username`,`email`,`phone`,`address`)
             VALUES('$username','$useremail','$userphone','$useraddress')";
             $query = mysqli_query($conn,$sql) or die("Query Failed");
            header('Location:http://localhost/crud21/index.php');
            connection_close($conn);
            }             
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="text" name="username" placeholder="UserName">
                <input type="text" name="useremail" placeholder="Email">                
                <input type="text" name="userphone" placeholder="Phone">                
                <input type="text" name="useraddress" placeholder="Address">                
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>