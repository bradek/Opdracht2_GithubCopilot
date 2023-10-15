<?php
/*Start a session and include Berichten.php*/
session_start();
include_once("Berichten.php");

/*Make an isset for the post button indienen. Then put the post information of 'naam' in the variable $naam and the
post information of 'bericht' in the variable $bericht. Make a session for both naam and bericht.
Then make a new Bericht in which both naam and bericht are saved.*/
if (isset($_POST['indienen'])) {
    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];

    $_SESSION['naam'] = $naam;
    $_SESSION['bericht'] = $bericht;

    $berichten = new Berichten($naam, $bericht);

    /*Make a session for the new Bericht and put it in the array 'berichten'*/
    $_SESSION['berichten'][] = $berichten;

    /*Make a header to go back to index.php*/
    header("Location: ../index.php");
}

?>