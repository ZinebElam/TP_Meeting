<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Page résultat</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style4.css">
</head>
<body>


<?php
require 'meeting.php';


$bdd = new PDO('mysql:host=localhost;dbname=meetings;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM mymeetings');
?>
<a href="index.php"> <button id="deco" style="float: right; background: #4caf50; font-size: 20px"> Déconnexion </button> </a>
<form class="for" action="supprimer.php" method="post">
    <?php
    while ($donnees = $reponse->fetch()) { ?>
        <div class="meetup">
        <?php
        $M = new Meeting($donnees);

        if (array_search($_SESSION['firstname'], $M->getOrganisateurs()) !== false) {

            ?>

            <h1 style="color: #4caf50"><input type="checkbox"
                   name="tabmeetings[]"
                   value="<?php echo $M->getMeetingname(); ?>"/>
            <?php echo("Le meeting   " . $M->getMeetingname()); ?></h1>

            <ul>
                <li>
                    <h3 style="color: #4caf50">Les organisateurs </h3>
                </li>

            </ul>

            <?php
            $ListOrganisateurs = $M->getOrganisateurs();
            ?>
            <ol>
                <?php
                for ($i = 0; $i < sizeof($ListOrganisateurs); $i++) {
                    ?>


                    <li>
                        <?php echo $ListOrganisateurs[$i]; ?>
                    </li>

                    <?php
                }
                ?>
            </ol>
            <?php echo("<strong>date debut est : </strong>" . $M->getDateDebut());?>
            <br>

            <?php echo("<strong>date de fin est : </strong>" . $M->getDateFin()); ?>

            <?php $ListParticipants = $M->getParticipants(); ?>

            <ul>
                <li>
                    <h3 style="color: #4caf50">Les participants </h3>
                </li>

            </ul>

            <ol>
                <?php
                for ($i = 0; $i < sizeof($ListParticipants); $i++) {
                    ?>


                    <li>
                        <?php echo $ListParticipants[$i]; ?>
                    </li>


                    <?php
                }
                ?>
            </ol>

            <?php
            echo "<br>";
        }
        ?>
        </div >
        <?php

    }

    ?>
    <input style="color: crimson ; font-size: 20px" type="submit" value="Supprimer"/>
</form>



</body>
</html>
