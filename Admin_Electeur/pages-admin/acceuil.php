
<?php  session_start();



  ?>
  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- link cdnbootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h3 class="navbar-brand text-center"><u>ELECTION DU SENEGAL</u></h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="acceuil.php">ACCUEIL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listeCandidat.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listeelecteur.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listeVote.php"></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="ajoutCandidat.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resultat.php"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-danger text-white my-2 my-sm-0 " ><a href="../destroy.php" class="text-white">DECONNECTER</a></button>
    </form>
  </div>
</nav>
<div class="container justify-content-center  p-3">

<h1 class="text-center p-2 shadow mb-1 bg-white rounded">Espace Administrateur</h1>
<div class="row text-center">
  <div class="col">
  <a href="ajoutCandidat.php"><button class="btn btn-primary m-5 shadow-lg p-2">AJOUTE CANDIDATS</button></a>
  <a href="resultat.php"><button class="btn btn-info shadow-lg p-2">RESULTATS</button></a>
  </div>
</div>
<div class="row justify-content-center">

<div class="col d-flex justify-content-center">
<div class="card  shadow-lg" style="width: 18rem;">
  <img class="card-img-top" src="images/liste.png" alt="">
  <div class="card-body">
    <h5 class="card-title">Liste des candidats</h5>
    <p class="card-text">Pour en <strong>savoir plus</strong> click juste sur ce bouton ci dessous pour voir la liste des candidats Sélectionner.</p>
    <a href="listeCandidat.php" class="btn btn-primary shadow-lg p-2">Voir plus</a>
  </div>
</div>
</div>

<div class="col d-flex justify-content-center">
<div class="card shadow-lg" style="width: 18rem;">
  <img class="card-img-top" src="images/liste.png" alt="">
  <div class="card-body">
    <h5 class="card-title">Liste des électeurs</h5>
    <p class="card-text">Pour en <strong>savoir plus</strong> click juste sur ce bouton ci dessous pour voir la liste des électeurs inscritent.</p>
    <a href="listeelecteur.php" class="btn btn-primary shadow-lg p-2">Voire plus</a>
  </div>
</div>
</div>

<div class="col d-flex justify-content-center">
<div class="card  shadow-lg" style="width: 18rem;">
  <img class="card-img-top" src="images/liste.png" alt="">
  <div class="card-body">
    <h5 class="card-title">Liste des votants</h5>
    <p class="card-text">Pour en <strong>savoir plus</strong> click juste sur ce bouton ci dessous pour voir la liste des votants.</p>
    <a href="listeVote.php" class="btn btn-primary shadow-lg p-2">Voire plus</a>
  </div>
</div>
</div>

</div>

    </div>
<!-- script cdnbootstrap -->

</body>
</html>