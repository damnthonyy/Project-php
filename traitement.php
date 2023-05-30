<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";

  try {
    $bdd = new PDO("mysql:host=$servername;dbname=HeticProject", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
  }

  if (isset($_POST['ok'])) {
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $DateDN = $_POST['DateDN'];
    $Genre = $_POST['Genre'];
    $Email = $_POST['Email'];
    $Mdp = $_POST['Mdp'];
    $Pseudo = $_POST['Pseudo'];
    
    $requete = $bdd->prepare("INSERT INTO utilisateur VALUES (0, :Nom, :Prenom, :DateDN, :Genre, :Email, MD5(:Mdp), :Pseudo )");

    $requete->execute (
      array(
        "Nom" => $Nom,
        "Prenom" => $Prenom,
        "DateDN" => $DateDN,
        "Genre" => $Genre,
        "Email" => $Email,
        "Mdp" => $Mdp,
        "Pseudo" => $Pseudo
      )
    );
    header("Location:conexion.php");
    exit();


    

  };
?>
