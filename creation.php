<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
<?php
if ($_POST) {
    require_once 'connexion.php';

    extract($_POST);
    $_SESSION['user_mail'] = $user_mail;
    $_SESSION['user_pwd'] = $user_pwd;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['firstname'] = $firstname;
    if ($user_pwd != $user_pwd_confirm) {
        ?>
        <div>

            <label class="alert"> <?php echo "Les mots de passe ne sont pas identiques !";
                ?> </label>
        </div>
        <?php
    } else {
        $sql = "INSERT INTO users(`firstname`,`lastname`, `user_mail`, `user_pwd`) VALUES ('$firstname','$lastname','$user_mail','$user_pwd')";
        mysqli_query($bdd, $sql);
        echo "compte bien créé ";
    }




    mysqli_close($bdd);
}

?>


<form method="post" action="creation.php">
    <div class="creation-form">
        <h1>Céer un compte</h1>
        <div class="txtb">

            <input type="text" name="lastname" value="" placeholder="Nom">
        </div>
        <div class="txtb">

            <input type="text" name="firstname" value="" placeholder="Prénom">
        </div>

        <div class="txtb">

            <input type="email" name="user_mail" value="" placeholder="Email">
        </div>

        <div class="txtb">

            <input type="text" name="user_pwd" value="" placeholder="Mot de passe">
        </div>
        <div class="txtb">

            <input type="text" name="user_pwd_confirm" value="" placeholder="Confirmer le mot de passe">
        </div>

        <input type="submit" class="btn" value="Créer"/>
        <a href="index.php"><input type="button" class="btn" value="se connecter"/></a>
    </div>
</form>
</body>
</html>

