<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='conexion.css'>
   
</head>
<body>
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

        

        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $error_msg="Email ou Mot de Passe incorrect !!";



            $Email=$_POST["Email"];
            $Mdp=$_POST["Mdp"];

            /*echo $Email. ' - '.$Mdp;*/

            if($Email != "" && $Mdp!="" ) {
                $req=$bdd ->query( "SELECT* FROM utilisateur WHERE Email= '$Email' AND Mdp='$Mdp' ");
                $rep=$req -> fetch();

                if ($req->rowCount() > 0) {
                    $rep = $req->fetch();
                    // C'est validé   
                    header("location:profil.php");
                    exit();
                } 
                else {
                    $error_msg = "Email ou mot de passe incorrect";
                }
                
            }
        }
        
    ?>






    <form method="post" action="">
        <label for="Email">Email</label>
        <input type="email" class="form-input" placeholder="Entrez votre email" id="Email" name="Email" required/>
        <label for="Mdp">Mot de passe</label>
        <input type="password" class="form-input" placeholder="Entrez votre mot de passe" id="Mdp" name="Mdp" required/>
        <input type="submit" value="Se connecter" name="ok"/>
    </form>

    
    <?php
        /*$error_msg="Email ou Mot de Passe incorrect !!"*/
        if($error_msg){ 
            
            ?> 
            <p> <?php echo $error_msg; ?></p>
            <?php 
        };
    ?>



        
        
   
        
        
    


   <script></script>
</body>
</html>