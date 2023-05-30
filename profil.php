<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>profil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='profil.css'>
</head>
<body>
    <header>
        <div class="profile-info">
            <img src="IMG/chatriste.jpeg" alt="Profile Picture">
            <h1>antoine mahassadi</h1>
            <p>@Dvmnthonyy</p>
        </div>
        <nav>
            <ul>
                <li><a href="#">Posts</a></li>
                <li><a href="#">Followers</a></li>
                <li><a href="#">Following</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <a href="#" class="link"> POST </a>
        <from action="" method="POST">
            <label> Ajouter une photo </label>
            <input type="file" name="image">
            <label> legende</label>
            <textarea name="text" cols="30" rows="10"> </textarea >
            <input type="submit" value="Ajouter" name="send">
        </form>
    </main>

    <footer>
        <p>&copy; mention legale</p>
    </footer>

    <script src='main.js'></script>
</body>
</html>