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

//EXEMPLE class
/*
private class role:nom_obj

function(){
    requete recup les données liées à la table 
    requete recup l'attrubut de l'autre classe (appel methode de la class role, promotion et centre)
    n,x,y=ID_max de chaque class en requete
    fetch
    tableau de valeur 
    foreach($fetchuser as $row1) {
        $total=$row1
        for(i=0, i<n, i++) {
            if ($row2['id'] == $row1['id_role'])
                $total=$row2['nom']

        + promotion idem changer n et i
        + centre idem changer n et i
        }
    }

}
*/

?>