<?php
include 'header.php';
?>
<div class="flex-container">
    <div class="container">
        <div class="edit add">
            <h2>Update Record</h2>
            <?php
            include 'connection.php';
            $u_id = $_GET['id'];            
            // $sql = "SELECT * FROM `user21` WHERE `id` = '$sid'";
            $sql = "SELECT * FROM `user21` where `id`={$u_id}";
            // print_r($_GET);
            $query = mysqli_query($conn,$sql);
            if(mysqli_num_rows($query)>0){
                while($row = mysqli_fetch_assoc($query)){
            ?>        
             
            <form action="updatedata.php" method="post">
                <input type="hidden" name="userid" value="<?php echo $row['id'] ?>">
                <input type="text" name="username" value="<?php echo $row['username'] ?>">
                <input type="text" name="useremail" value="<?php echo $row['email'] ?>">                
                <input type="text" name="userphone" value="<?php echo $row['phone'] ?>">                
                <input type="text" name="useraddress" value="<?php echo $row['address'] ?>">                
                <button type="submit" name="submit">Update</button>
            </form>
            <?php }} ?>
        </div>
    </div>
</div>