<!DOCTYPE html> 
<?php 
include 'connect.php';

 if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    echo($Username);

    $mysqli->query("INSERT INTO $table1_db (Username, Password) VALUES ('$Username', '$Password')");
    echo($mysqli->error);
}

echo '<form method="post">
  <h2>Create user</h2>
  <p><label for="Username">Username</label> <input type="text" id="Username" name="Username" value=""/></p>
  <p><label for="Password">Password</label> <input type="Password" id="Password" name="Password" value="" /></p>
  <p><input type="submit" name="submit" value="Create" class="button"/></p>
  </form> <a href="Index1.php">Login</a>';
exit;  
?>