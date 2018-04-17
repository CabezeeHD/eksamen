<?php 
session_start(); 
include 'connect.php';

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['Username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (isset($_POST['Destroy'])) {
    session_destroy();
}

if (!USERNAME or isset($_GET['logout'])){	
 include('login.php');
}

$_SESSION['Usersession'][$_SESSION['Username']] = $_SESSION['Password'];

echo "Brugersession";
echo "<br>";
foreach ($_SESSION['Usersession'] as $key => $value) {
	echo "Bruger: " . $key . " Kode: " . $value . "<br>";
}

$mysqli->close();

?>
<p>Logged In
    <?php 
	echo '<br> ' . "Brugernavn: " . $_SESSION['Username'] . ' <br> ' . "Adgangskode: " . $_SESSION['Password'];
    ?>
	<br>
</p>
<form method="post">
   	<input type="hidden" name="dv" value="<?php echo($dv); ?>">
	<input type="submit" name="Destroy" value="Ødelæg session">
</form>

<p>
    <!-- sættes ind i URL --> 
    <a href="?logout=1">Logout</a>
</p>
