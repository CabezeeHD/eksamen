<!DOCTYPE html> 
<?php 
defined('DS')OR die('No direct access allowed.');
 
echo '<a href ="Createuser.php">Create user</a>';

if(isset($_GET['logout'])) {
    $_SESSION['Username'] = '';
    header('Location:  ' . SELF);
}
 // FIND FEJLEN
if(isset($_POST['Username'])) {
    if($users[$_POST['Username']] !== NULL && $users[$_POST['Username']] == $_POST['Password']) {
  $_SESSION['Username'] = $_POST['Username'];
  $_SESSION['Password'] = $_POST['Password'];
  header('Location:  ' . SELF);
    }else {
        //invalid login
  echo "<p>Error Logging In</p>";
    }
}

echo '<form method="post" action="' . SELF . '">
  <h2>Login</h2>
  <p><label for="Username">Username</label> <input type="text" id="Username" name="Username" value="" /></p>
  <p><label for="Password">Password</label> <input type="Password" id="Password" name="Password" value="" /></p>
  <p><input type="submit" name="submit" value="Login" class="button"/></p>
  </form>';
exit; 
?>