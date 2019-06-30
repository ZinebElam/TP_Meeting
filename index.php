<?php session_start();

if ($_POST) {
    require_once 'connexion.php';
    extract($_POST);


    $sql = "SELECT * FROM users WHERE user_mail='$loggin' AND user_pwd='$pwd'";


    $resultat = mysqli_query($bdd, $sql);
    if ($resultat) {
        if (mysqli_num_rows($resultat) == 0) {
            echo 'Utilisateur ou mot de passe incorrecte !!';
        } else {
            $row = mysqli_fetch_assoc($resultat);
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['firstname'] = $row['firstname'];
            header('location:pageprincipale.php');
        }
    }
    mysqli_free_result($resultat);
    mysqli_close($bdd);
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="index.php">
    <div class="login-box">
        <h1>Connexion</h1>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" name="loggin" placeholder="Identifiant">
        </div>

        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwd" placeholder="Mot de passe">
        </div>

        <input type="submit" class="btn" value="Connexion">
        <a href="creation.php"><input type="button" class="btn" value="Inscription"/></a>
    </div>
</form>
</body>
</html>