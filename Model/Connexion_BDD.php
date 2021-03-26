<?php
session_start();
$dsn = 'mysql:dbname=projet;host=localhost';
$user = 'root';
$password = '';

try {
	$dbh = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
	echo 'connexion échouée :' . $e->getMessage();
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if($_SESSION['username'] == NULL) {
	header('Location: connexion.php');
}

?>