<?php
/*Include Berichten.php and start a session.*/
include_once("php/Berichten.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Berichten</title>
            <!--Make a link to my css/style.css file.
            Then link to bootstrap. I don't have it locally.-->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
<body class="fantasy">
  <!--Make a navigation with two links, one to index.php and one to berichten.php.-->
  <nav class="fantasy-nav">
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="berichten.php">Berichten</a>
  </nav> 

<!--Make an if-statement in case session $berichten is set. Then give the variable 'naam' and 'bericht' an empty value by defautl.-->
    <?php
    if (isset($_SESSION['berichten'])) {
        $naam = "";
        $bericht = "";

        /*Make a foreach for the session berichten as $berichten.
        Reverse the array as well.*/
        foreach (array_reverse($_SESSION['berichten']) as $berichten) {
            /*Make a variable for the name and the message.*/
            /*Make an if statement whom checks if the get-method of namen is ''. If it's true, use the get-method on the variable.
            Do the same for berichten.*/
            if ($berichten->getNaam() == '') {
                $naam = $berichten->getNaam();
            }
            if ($berichten->getBericht() == '') {
                $bericht = $berichten->getBericht();
            }

    ?>
    <!--Make a paragraph for naam and echo getNaam(), do the same for getBericht. The paragraph of getNaam() should be bold.
    Use a break between the two.-->
    <p class="fantasy-text"><b><?php echo $berichten->getNaam(); ?>:</b><br>
    <?php echo $berichten->getBericht(); ?></p>
    <hr class="fantasy-line">
    <?php
        }
    }
    ?>

<!--Do the same for JQuery-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!--Add also a link to the bootstrap javascript. I don't have this one locally either.-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>