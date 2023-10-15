<?php
/*Start a session.
Then make two if-statements. If the session 'naam' is not set, the session is empty.
If the session 'bericht' is not set, that session is empty as well.*/
session_start();
if (!isset($_SESSION['naam'])) {
    $_SESSION['naam'] = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <h1 class="fantasy-heading">Mijn pagina</h1>
    <p class="fantasy-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        <br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
        <br>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

    <!--Make a Bootstrap carousel with three images, being img/fantasy1.png, img/fantasy2.png and img/fantasy3.png-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner fantasy-image">
                      <div class="carousel-item active">
                          <img src="img/fantasy1.png" class="d-block w-100" alt="Fantasy carousel image 1">
                      </div>
                      <div class="carousel-item">
                        <img src="img/fantasy2.png" class="d-block w-100" alt="Fantasy carousel image 2">
                      </div>
                      <div class="carousel-item">
                        <img src="img/fantasy3.png" class="d-block w-100" alt="Fantasy carousel image 3">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Vorige</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Volgende</span>
                    </a>
                  </div>
            </div>
        </div>

        <br>

        <form class="fantasy-form" action="php/verwerking.php" method="post">
          <!--Add two inputs, one for a name 'naam' and one for message 'bericht'. Don't use a div.-->
          <input type="text" name="naam" placeholder="Naam" class="fantasy-input">
          <!--Make an input for messages 'bericht' as well.-->
          <input type="text" name="bericht" placeholder="Bericht" class="fantasy-input">
          <!--Make a button of the type submit 'indienen' Use the button tag.-->
          <button type="submit" name="indienen" class="fantasy-input">Indienen</button>
        </form>
        <br>
        

    <!--Do the same for JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!--Add also a link to the bootstrap javascript. I don't have this one locally either.-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>