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

    <title> BTS PROMO 321 CULTURE ÉCONOMIQUE JURIDIQUE ET MANAGÉRIALE </title>  
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

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img\cejm.png" class="card-img-top" alt="1">
      <div class="card-body">
        <h5 class="card-title"> COURS VENDREDI 28 NOVEMBRE </h5>
        <p class="card-text"> <strong> DST : Analyser Le Marché Du Logiciel et Analyse D'un Contrat de Travail</strong> <br>
        Séance d'analyse d'un article de presse THÈME 1 : L’INTÉGRATION DE L’ENTREPRISE DANS SON ENVIRONNEMENT 
        Étude de la méthodologie et Résumer l’article : Don't Nod, Ubisoft... Qui est Tencent, le géant chinois qui lorgne les
        Fleurons français du jeu vidéo? </p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-primary"> COURS COMPLET </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img\cejm.png" class="card-img-top" alt="2">
      <div class="card-body">
        <h5 class="card-title"> COURS VENDREDI 21 NOVEMBRE </h5>
        <p class="card-text"> Analyse d'un contrat de travail et de ses clauses, Corrigé du TD - Comparer Les Statuts D’une Activité 
        (Professionnelles Micro-entrepreneur freelance, Salarié secteur privé, Fonctionnaire secteur public). <br>
        TD - Analyser un marché <br>
        - Définition du concept de marché  <br>
        - Analyse de l’objet de l’échange : <br>
        - L’objet <br>
        - Analyse de l’offre <br>
        - Analyse de la Demande <br>
        - Évolution <br>
        - Structure  
    </p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-primary"> COURS COMPLET </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img\cejm.png" class="card-img-top" alt="3">
      <div class="card-body">
        <h5 class="card-title"> COURS VENDREDI 14 NOVEMBRE </h5>
        <p class="card-text"> Méthodes - ANALYSER LES TENDANCES D’UN MARCHÉ <br>
        Méthode -  DRA, plan de réponse questions éco management ,en management, façon systématique, il faut utiliser la méthode DRA (définir, répondre et Argumenter) .<br> 
        - Je définis le mot clé de laquestion   <br>
        - Je réponds <br>
        - J’argumente (à partir de lamise en situation et ou des annexes) <br>
        Fiche méthodologique analyse du contrat de travail.</p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-primary"> COURS COMPLET </button>
      </div>
    </div>
  </div>
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