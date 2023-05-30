<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>inscription</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='inscription.css'>
   

    <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
</head>
<body>
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="traitement.php" method="post">
				<h2>inscription</h2>
				<div class="form-row">
					<label for="Nom">Nom</label>
					<input type="text" name="Nom" id="Nom" class="input-text" placeholder="entrez votre nom" required>
					<i class="fas fa-user"></i>
				</div>

				<div class="form-row">
					<label for="Prenom">Prenom</label>
					<input type="text" name="Prenom" id="Prenom" class="input-text" placeholder="entrez votre Prenom" required>
					<i class="fas fa-user"></i>
				</div>

				<div class="form-row">
					<label for="Pseudo">Pseudo</label>
					<input type="text" name="Pseudo" id="Pseudo" class="input-text" placeholder="entrez votre Pseudo" required>
					<i class="fas fa-user"></i>
				</div>

				<div class="form-row">
					<label for="DateDN">Date de naissance</label>
					<input type="text" name="DateDN" id="DateDN" class="input-text" placeholder=" Ex (12 avril 2000 " required>
					<i class="fas fa-user"></i>
				</div>

				<div class="form-row">
					<label for="Genre">Genre</label>
					<input type="text" name="Genre" id="Genre" class="input-text" placeholder="(F pour feminin ou M pour masculin" required>
					<i class="fas fa-user"></i>
				</div>
				
				<div class="form-row">
					<label for="Email">Email</label>
					<input type="text" name="Email" id="Email" class="input-text" placeholder="  entrez votre Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>

				<div class="form-row">
					<label for="Mdp">mot de passe </label>
					<input type="Mdp" name="Mdp" id="Mpd" class="input-text" placeholder="entrez votre mot de passe " required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="ok" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>

    
    



    <script src='main.js'></script>
</body>
</html>