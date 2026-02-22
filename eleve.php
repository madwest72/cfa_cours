<!doctype html>
<html lang="fr">

<head>
    <!-- librairie et icones boostrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- librairie et icones boostrap-->

    <link rel="stylesheet" type="text/css" href="style\style5.css"/> <!-- lien vers le fichier style css-->

    <title> BTS PROMO 321 ELEVES </title>  
</head>



<body>
    <!--boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


<!--BARRE DE NAVIGATION -->
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="position: relative; z-index: 1050;">      <!-- barre de navigation et paneau déroulant , ne s'affiche pas en arrire plan  -->
  <div  class="container-fluid">

    <!--LOGO TAILLE 100px FOIS 100px --> 
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

<!--carrousel images cfa insta -->
<div id="carousel">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" width="500" height="500">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.png" class="d-block w-100" alt="IMG 1 CFA INSTA">
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="IMAGE 2 CFA INSTA">
    </div>
    <div class="carousel-item">
      <img src="img/slide3b.png" class="d-block w-100" alt="IMAGE 3 CFA INSTA">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- fin carrousel images cfa insta -->



<br>
<center><h1> LISTES DES ÉLÈVES DE LA PROMO 321  </h1></center> <br>
<br>

<!--TABLEAU DES ELEVES BOOSTRAP -->
<div id="tableau_el" >
<table class="table table-bordered" style="width: 1300px; margin: auto;">
  <thead>
    <tr>
      <th scope="col"> NUMERO </th>
      <th scope="col"> NOM </th>
      <th scope="col"> PRENOM </th>
      <th scope="col"> DISCORD </th>
      <th scope="col"> MAIL (fictifs) </th>
      <th scope="col"> FORMATION (supposée) </th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ADDAD</td>
      <td>Abdelkarim</td>
      <td>karim_addad</td>
      <td>abdelkarimaddad@gmail.com</td>
      <td>INITIALE</td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>CAMARA</td>
      <td>Allama</td>
      <td>trax_black</td>
      <td>allamacamara@gmail.com</td>
      <td>ALTERNANCE</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>CHERFI</td>
      <td>Moaad</td>
      <td>moaadc</td>
      <td>moaadcherfi@gmail.com</td>
      <td>INITIALE</td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>DIALLO</td>
      <td>Mamadou</td>
      <td>madwest</td>
      <td>mamadoudiallo@gmail.com</td>
      <td>INITIALE</td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>FLECHAS LAGUNA</td>
      <td>Tania</td>
      <td>tania002198</td>
      <td>taniaflechaslaguna@gmail.com</td>
      <td>ALTERNANCE</td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>FOUKOU SALET</td>
      <td>Abdoulaye</td>
      <td>ab236_</td>
      <td>abdoulayefoukousalet@gmail.com</td>
      <td>ALTERNANCE</td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>GOTAL HENRY</td>
      <td>Stanley</td>
      <td>stanley02840</td>
      <td>stanleygotalhenry@gmail.com</td>
      <td>INITIALE</td>
    </tr>

    <tr>
      <th scope="row">8</th>
      <td>KABA</td>
      <td>Ismael</td>
      <td>flvcko999</td>
      <td>ismaelkaba@gmail.com</td>
      <td>ALTERNANCE</td>
    </tr>

    <tr>
      <th scope="row">9</th>
      <td>KENNICHE</td>
      <td>Miryam</td>
      <td>miryam.m</td>
      <td>miryamkenniche@gmail.com</td>
      <td>ALTERNANCE</td>
    </tr>

    <tr>
      <th scope="row">10</th>
      <td>MANAC'H</td>
      <td>Evan</td>
      <td>shlaggggg</td>
      <td>evanmanach@gmail.com</td>
      <td>INITIALE</td>
    </tr>

    <tr>
      <th scope="row">11</th>
      <td>PICORELLI HAMORI</td>
      <td>Elysa</td>
      <td>elysa.exe</td>
      <td>elysapicorellihamori@gmail.com</td>
      <td>ALTERNANCE</td>
    </tr>

    <tr>
      <th scope="row">12</th>
      <td>PRUDENT</td>
      <td>MATTHIEU</td>
      <td>matt_pg</td>
      <td>matthieuprudent@gmail.com</td>
      <td>ALTERNANCE</td>
    </tr>

    <tr>
      <th scope="row">13</th>
      <td>SAHIÉ</td>
      <td>Jériel</td>
      <td>neyzoks_89</td>
      <td>jerielsahie@gmail.com</td>
      <td>INITIALE</td>
    </tr>

    <tr>
      <th scope="row">14</th>
      <td>TALL</td>
      <td>Rayan</td>
      <td>abdrm971_88745</td>
      <td>rayantall@gmail.com</td>
      <td>ALTERNANCE</td>
    </tr>

    <tr>
      <th scope="row">15</th>
      <td>ZENKRI</td>
      <td>Ahmed</td>
      <td>amd93</td>
      <td>ahmedzenkri@gmail.com</td>
      <td>INITIALE</td>
    </tr>

    <tr>
      <th scope="row">16</th>
      <td>SHETA</td>
      <td>Abdalla</td>
      <td>amaterasu94_</td>
      <td>abdallasheta@gmail.com</td>
      <td>INITIALE</td>
    </tr>
    </tbody>
  </table>
  </div>
  <!--FIN TABLEAU DES ELEVES BOOSTRAP -->










<br>
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
        <a href="https://www.instagram.com/cfa_insta/" class="text-white fs-4"><i class="bi bi-instagram"></i>
        <a href="https://x.com/CFAINSTA" class="text-white fs-4"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.linkedin.com/school/cfa-insta/" class="text-white fs-4"><i class="bi bi-linkedin"></i></a>
      </div>

      <br>

      <p>© 2025 CFA INSTA — Tous droits réservés</p>

</footer>
<!-- fin du  footer / pied  de page --> 

</body>
</html>