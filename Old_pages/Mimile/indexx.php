<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title> Page connexion </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <h1> Enter data into DB </h1>
    <form action="" method="POST">
        <label for="center"> center name</label>
        <input type="text" name="center" id="center">

        <input type="submit" name="submit" value="send data">
        
    </form>

    <?php

    include "connexion.php";
 
    if(isset($_POST['submit'])){
    
        $center = $_POST['center'];
    
        $pdoQuery = "INSERT INTO `centre` (`id_centre`, `nom_centre`) VALUES (NULL,'{$center}');";

        $req = $pdo->prepare($pdoQuery);
        $result =$req->execute();
        
        //$verify = $pdo->query($pdoQuery);
        //$fetch = $verify->fetch(PDO::FETCH_ASSOC);
        //print_r($fetch);

        if ($result){ echo'Data inserted <br>';}
        else{echo'Insertion failed <br>';}
    
    }
    
    ?>


    <body>

</html>