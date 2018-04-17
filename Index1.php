<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Quantified self</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
  <div class="container-fluid">
    <header>
      <h1>Quantified self</h1>
    </header>
  </div>
<body>

  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">  
          <a id="navbar" class="nav-item nav-link active" href="#">Hjem <span class="sr-only">(current)</span></a>
          <a id="navbar" class="nav-item nav-link" href="Side her">Features</a>
          <a id="navbar" class="nav-item nav-link" href="Index1.php">Login</a>
        </div>
      </div>
    </nav>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>