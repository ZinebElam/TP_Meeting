<?php session_start();

$ListMeetingsToDelete = $_POST['tabmeetings'];
if(empty($ListMeetingsToDelete))
{
    echo "La liste est empty";
}
else{
    $Size = count($ListMeetingsToDelete);

    $bdd = new PDO('mysql:host=localhost;dbname=meetings;charset=utf8', 'root', '');

    for($i=0;$i<$Size;$i++)
    {
        $sql = "DELETE FROM mymeetings WHERE meetingname = '$ListMeetingsToDelete[$i]'";
        $bdd->query($sql);
    }
    echo "Vous avez supprimé ".$Size." meetings !";
}






?>