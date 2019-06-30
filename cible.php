<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Page résultat</title>
</head>
<body>


<?php
$meeting_name = $_POST['meeting_name'];
print("<center>Le meeting $meeting_name est bien enregistré</center>");
$Organisateur = $_POST['Organisateurs'] ." ".$_SESSION['firstname'];
print("<center>L'organisateur est Monsieur $Organisateur </center>");
$Participants = $_POST['Participants'];
$ListParticipants = explode(" ", $Participants);

print_r($ListParticipants);


$strdebut = $_POST['DateDebut'];
$datedebut = date('Y-m-d', strtotime($strdebut));
echo "date début est " . $datedebut;
$strfin = $_POST['DateFin'];
$datefin = date('Y-m-d', strtotime($strfin));
echo "date de fin est : " . $datefin;


try {
    $bdd = new PDO('mysql:host=localhost;dbname=meetings', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$req = $bdd->prepare('INSERT INTO mymeetings(meetingname,datedebut,datefin,organisateurs, participants) VALUES(:meeting_name,:datedebut, :datefin,:Organisateur,:Participants)');

$req->execute(array(':meeting_name' => $_POST['meeting_name'], ':datedebut' => $_POST['DateDebut']
, ':datefin' => $_POST['DateFin'],':Organisateur' => $Organisateur,  ':Participants' => $_POST['Participants']));


?>


</body>
</html>
