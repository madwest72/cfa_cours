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

    <title> BTS SIO SLAM PRÉSENTATION </title>  
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

<center>  <br>

<!-- 1er cadre  boostrap-->

<div class="card border-info mb-3" style="max-width: 40rem;">
  <div class="card-header"> <strong> PRÉSENTATION DE LA FORMATION </strong> </div>
  <div class="card-body">
    <h5 class="card-title"> BTS SERVICES INFORMATIQUES AUX ORGANISATIONS </h5>
    <p class="card-text"> Tout d’abord, le BTS SIO, a pour but de former les futurs diplômés aux nouveaux besoins des entreprises en informatique que ce soit en développement ou en réseaux. En effet, ces dernières sont de plus en plus exigeantes et souhaitent que leur système informatique soit en adéquation avec leurs besoins stratégiques, et non l’inverse. </p>
  </div>
    <h5 class="card-title"> OBJECTIFS DE LA FORMATION </h5>
     <p class="card-text"> Tout d’abord, à l’issue de ce BTS (option SISR ou SLAM), vous serez capable de : <br>
      · Maintenir un accès utilisateur sécurisé. <br>
      · Concevoir des infrastructures réseaux. <br>
      · Administrer des systèmes informatiques. <br>
      · Programmer en orienté objet. <br>
      · Créer et adapter des solutions applicatives. <br> </p>

        <h5 class="card-title"> PROGRAMME DE LA FORMATION  </h5>
        <p class="card-text"> · Culture générale et expression. <br> 
        · Mathématiques appliquées à l’informatique. <br>
        · Culture économique, managériale et juridique. <br>
        · Anglais appliqué à l’informatique. <br> </p>
        
        <h5 class="card-title"> Option SISR (Solutions d’Infrastructure, Systèmes et Réseaux)  </h5>
        <p class="card-text">
          · Administration, sécurisation et supervision des systèmes et réseaux.<br>
          · Déploiement et maintenance des équipements d’interconnexion.<br>
          · Gestion des incidents et assistance utilisateur.<br>
          · Détection et investigation des incidents de sécurité.<br>
        </p>

        <h5 class="card-title"> Option SLAM (Solutions Logicielles et Applications Métiers) </h5>
        <p class="card-text">
          · Analyse des besoins utilisateurs et spécifications techniques.<br>
          · Développement et sécurisation de solutions applicatives.<br>
          · Gestion du patrimoine applicatif.<br>
          · Documentation des solutions.<br>
        </p>
</div>


<div class="card border-info mb-3" style="max-width: 40rem;">
  <div class="card-header"> <strong> RYHTME DE FORMATION </strong> </div>
  <div class="card-body">
    <h5 class="card-title"> Formation en alternance </h5>
    <p class="card-text"> Ensuite, la formation combine théorie (2 jours au CFA INSTA) et pratique (3 jours en entreprise). Deux types de contrats sont possibles : <br>
      · Contrat d’apprentissage (jusqu’à 30 ans). <br>
      · Contrat de professionnalisation. <br>
      · Rémunération au SMIC selon le contrat et l’âge de l’apprenti. <br>      
    </p>
    <h5 class="card-title"> Formation initiale </h5>
    <p class="card-text">En formation initiale, les étudiants suivent les mêmes cours théoriques, complétés par un stage de 11 semaines sur les deux années.        </p>
  </div>
</div>


<div class="card border-info mb-3" style="max-width: 40rem;">
  <div class="card-header"> <strong>  DÉBOUCHÉS ET POURSUITES D'ÉTUDES  </strong></div>
  <div class="card-body">
    <h5 class="card-title"> Débouchés SLAM </h5>
    <p class="card-text"> 
    · Développeur d’applications. 
    · Analyste programmeur. 
    · Responsable des services applicatifs.
    · Technicien d’études informatiques. </p>

    <h5 class="card-title"> Débouchés SISR </h5>
    <p class="card-text">   
      · Administrateur systèmes et réseaux.
      · Technicien de production et d’infrastructure.
      · Support systèmes et réseaux.
      · Pilote d’exploitation     </p>
  </div>
</div>
</center>





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