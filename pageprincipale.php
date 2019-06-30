<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style3.css">
</head>


<body>
<a href="index.php"><button id="deco">Déconnexion</button></a>
<h1>Bonjour <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?></h1>
<h2>Créer un nouveau meeting</h2>
<form method="post" action="cible.php">
    <div class="formu">

        <div class="txtb">
            <input type="text" name="meeting_name" placeholder="Le nom du meeting"/>
            <input type="text" name="Organisateurs" placeholder="Ajouter d'autres organisateurs"/>
            <input type="date" name="DateDebut" placeholder="Date de début"/>
            <input type="date" name="DateFin" placeholder="Daete de fin"/>
            <input type="text" name="Participants" placeholder="Participants"/>
            <input type="submit" class="btn" value="Sauvegarder"/>


        </div>
    </div>
</form>

<h2> Les meetings que j'ai organisés</h2>
<form method="post" action="result.php">
    <div class="formu">

        <div class="txtb">
            <input type="submit" class="btn" value="Voir les meetings"/>
        </div>
    </div>
</form>

<h2> Les meetings dont je participe</h2>
<form method="post" action="result1.php">
    <div class="formu">

        <div class="txtb">
            <input type="submit" class="btn" value="Voir les meetings"/>
        </div>
    </div>
</form>

<h2> Les meetings que </h2>
<form method="post" action="result2.php">
    <div class="formu">

        <div class="txtb">
            <input type="submit" class="btn" value="Voir les meetings"/>
        </div>
    </div>
</form>


</body>
</html>
