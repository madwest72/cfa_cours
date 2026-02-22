<!doctype html>
<html lang="fr">

<head>
    <!-- librairie et icones boostrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- librairie et icones boostrap-->

   <!-- lien vers le fichier style css-->
    <link rel="stylesheet" href="style/style5.css"/>

    <title> BTS PROMO 321 ACCUEIL </title>  
</head>



<body>
<!--boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


<!--BARRE DE NAVIGATION -->
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="position: relative; z-index: 1050;">      <!-- barre de navigation et paneau déroulant , ne s'affiche pas en arrire plan  -->
  <div  class="container-fluid">

  
    <a class="navbar-brand" href="index.php">  <!--MODOFICATION DU HREF pour revenir  à l'acceuil -->
                <img src="img/logo.jpg" alt="Bootstrap" width="100" height="100">  <!--LOGO cliquable TAILLE 100px FOIS 100px -->
    </a>

    <!-- Contenu navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav position-absolute start-50 translate-middle-x mb-2 mb-lg-0"> <!--  mettre le Contenu de la barrre de navigation au centre -->

      <a class="navbar-brand" href="btssio.php"> <h3>BTS SIO - SLAM  PROMO 321</h3> </a> 

      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <!-- "icones" -->
       
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="eleve.php"> <strong>ELEVES</strong> </a> <!--LIEN VERS LA PAGE ELEVE -->
      </li>

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="planning.php"> <strong>PLANNING</strong> </a> <!--LIEN VERS LA PAGE PLANNING -->
      </li>
      
      <!--PANNEAU Déroulable-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="matieres.php" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            <strong> MATIERES </strong> <!-- baslise strong pour mettre le texte en gras-->
          </a>
        
          <ul class="dropdown-menu"> <!-- panneau déroulant  -->
            <li><a class="dropdown-item" href="informatique.php"> INFORMATIQUE </a></li> <!-- matieres -->
            <li><hr class="dropdown-divider"></li> <!-- ligne de séparation dans le panneau déroulant des matieres-->
            <li><a class="dropdown-item" href="maths.php"> MATHS </a></li> <!-- HREF QUI DIRIGE VERS LES DIFFERENTES PAGES-->
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="anglais.php"> ANGLAIS </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="francais.php"> CULTURE GÉNÉRALE & EXPRESSION </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cejm.php"> CULTURE ÉCONOMIQUE JURIDIQUE ET MANAGÉRIALE  </a></li>
          </ul>

        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#contact"> <strong>CONTACTS/RÉSEAUX</strong>  </a> <!--Bouton pour arriver sur le footer avec les informations de contact le href="#contact va nous rediriger vers la balise qui à pour nom "contact" dans le footer  -->
        </li>

      </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--FIN DE LA BARRE DE NAVIGATION -->


<br>



<!--IMAGE DE PRÉSENTATION longeur et largeur -->
<center> 
<img src="img/imageintro.png" class="card-img-top" alt="Portes ouvertes" style="width: 1200px; height: auto;"> 
</center>


<br>


<!--Titres + PRESENTATION -->
<h2 class="text-center"> CFA INSTA C'EST QUOI  ?</h2>

<center> <p><strong> Fondé en 2009 par une école d’ingénieurs, le CFA INSTA est un centre de formation d’apprentis à but non lucratif en Île-de-France. Il est spécialisé dans des formations en <br> informatique et comptabilité,qui sont reconnues par l’État.
Ainsi, nous offrons deux cycles de formation principaux : le Cycle Bachelor (du Bac au Bac+3) et le Cycle Mastère (du Bac+3 au Bac+5).<br> Chacun de ces cycles délivre des diplômes reconnus par l’État pour chaque niveau.
Dès la première année, notre façon d’apprendre, accessible à partir du Bac, repose sur la formation en entreprise.<br> En effet, cela permet une expérience en entreprise immédiate, soutenue par un solide réseau de partenaires. </strong></p></center>


<!-- VIDEO YOUTUBE --> 
<div style="text-align:center;" > <!-- balise pour centrer le contenu --> 
  <iframe width="560" height="315"   
  src="https://www.youtube.com/embed/q6CheYtMj1g?rel=0"
  title="CFA INSTA VID"
  allowfullscreen>
  </iframe>
</div>
<!-- iframe = balise qui sert à afficher une page web dans une autre page web. ici elle sert à afficher le lecteur vidéo de YouTube directement sur mon site
width="560" height="315" largeur et hauteur en pixels de la video
src signifie source C’est le lien  que l’iframe doit charger. L’iframe affiche exactement ce qu’il y a à cette adresse.
allowfullscreen pour activer l'option pleine écran--> 

<br>


<!-- BOUTONS --> 
<div style="text-align:center;">
  <a class="btn btn-outline-success" href="btssio.php" role="button">BTS SIO -SLAM</a>
  <a class="btn btn-outline-primary" href="eleve.php" role="button">ÉTUDIANTS</a>
  <a class="btn btn-outline-warning" href="planning.php" role="button">PLANNING</a>
  <a class="btn btn-outline-danger" href="matieres.php" role="button">MATIERES</a>
  <a class="btn btn-outline-dark" href="#contact" role="button">CONTACTS ET RÉSEAUX</a>
  
</div>




<!-- footer / pied de page --> 
<footer id="contact"  class="bg-dark text-white mt-5 py-4"> <!-- id = contacct je donne un identififant  à ma balise footer pour pouvoir la mentioner et me rediriger via la barre de navigation--> 
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3 "> <!-- différente collones --> 

        <h5><strong> CONTACTEZ-NOUS </strong></h5>

        <br>

        <h6> NUMÉRO  </h6>
        <p> 01 43 36 75 56</p>

        <h6> INFORMATION & DIRECTION </h6>
        <p> contact@cfa-insta.fr </p>

        <h6>  ADRESSE </h6>
        <p> 12 Rue De Cléry 75002 Paris </p>
    
      </div>
      
      <div class="col-md-4 mb-3 "> <!-- différente collones --> 

      <h5><strong> NOS RÉSEAUX</strong></h5>

      <br>

        <div class="d-flex gap-3">
        <a href="https://www.facebook.com/cfainsta" class="text-white fs-4"><i class="bi bi-facebook"></i></a> <!-- je modifie "class pour avoir les icones des réseaux , et je met  le liens des réseaux dans le href " --> 
        <a href="https://www.instagram.com/cfa_insta/" class="text-white fs-4"><i class="bi bi-instagram"></i></a>
        <a href="https://x.com/CFAINSTA" class="text-white fs-4"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.linkedin.com/school/cfa-insta/" class="text-white fs-4"><i class="bi bi-linkedin"></i></a>
      </div>

      <br>

      <p>© 2025 CFA INSTA — Tous droits réservés</p>

</footer>
<!-- fin du  footer / pied  de page --> 

</body>
</html>