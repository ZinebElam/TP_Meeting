<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Page résultat</title>
    <meta charset="utf-8">
</head>
<body>


<?php
require 'meeting.php';


$bdd = new PDO('mysql:host=localhost;dbname=meetings;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM mymeetings');
while ($donnees = $reponse->fetch()) { ?>

<div class="foor">

<?php
    $M = new Meeting($donnees);

    if (array_search($_SESSION['firstname'], $M->getParticipants()) !== false) { ?>

          <h1 style="color: #4caf50"> <?php echo("Le meeting " . $M->getMeetingname()); ?> </h1>

            <ul>
                <li>
                    <strong style="color: #4caf50">Les organisateurs </strong>
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
        <strong>
        <?php
        echo "<br>";

        echo("<br>");
        echo("<strong>date debut est : </strong>"  . $M->getDateDebut());
        echo("<br>");
        echo("<strong>date fin est : </strong>"  . $M->getDateFin());
        echo("<br>");
        $ListParticipants = $M->getParticipants();
        ?>
        </strong>

        <ul>
            <li>
                <strong style="color: #4caf50">Les participants </strong>
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

    <?php

}


?>
    </div>

</body>
</html>
