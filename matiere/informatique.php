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

    <title> BTS PROMO 321 INFORMATIQUE </title>  
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

<center> 
<div class="card border-info mb-3" style="max-width: 40rem;">
  <div class="card-header"> <strong> RESSOURCES </strong>  </div>
  <div class="card-body">
    <h5 class="card-title"> APPLICATIONS </h5>
    <p class="card-text"> 
       <a href="https://sourceforge.net/projects/xampp/"> XAMP </a> <br>
       <a href="https://code.visualstudio.com/download"> VS CODE </a> <br>
       <a href="https://sourceforge.net/projects/orwelldevcpp/"> DEV C++ </a> <br>
       <a href="https://www.vmware.com/"> VMWARE  </a> <br>
      </p>

    <h5 class="card-title"> LIENS UTILES </h5>
    <p class="card-text"> 
      <a href="https://getbootstrap.com/"> BOOTSTRAP </a>   <br>
      <a href="https://www.w3schools.com/"> W3 sCHOOL </a>  <br>
      <a href="https://discord.com/"> DISCORD </a>  <br>
    </p>

  </div>
</div>
</center>



<br>
<!-- 1ERE LIGNE   -->
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img\infoo.jpg" class="card-img-top" alt="t1">
      <div class="card-body">
        <h5 class="card-title"> COURS DU JEUDI 27 NOVEMBRE </h5>
        <p class="card-text"> Debut du CHAPITRE 2 sur Les alternatives ,et  les structures de contrôle.
        Cours en Luangage C <br>
        If Else : L’alternative double exécute la première instruction ou la deuxième  instruction selon que la condition soit vérifié ou non. Il y’a une exclusion mutuelle des deux instruction : c’est soit l’une soit l’autre instruction qui est exécutée. Mais jamais les deux à la fois. <br>
        Switch : Le selon (switch)  permet une bonne structuration de l’imbrication des alternatives. L’expression doit être de types énuméré (entier ou caractères). <br>
        </p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-info">VOIR LE COURS COMPLET</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img\infoo.jpg" class="card-img-top" alt="t2">
      <div class="card-body">
          <h5 class="card-title"> COURS DU VENDREDI 28 NOVEMBRE </h5>
        <p class="card-text">-Tentaive d'instalation d'une machine virtuelle linux VMWARE WORKSTATION ,Serie d'exercices en Luangage C avec Dev C++ puis transcription en PHP </p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-info">VOIR LE COURS COMPLET</button>
      </div>
    </div>
  </div>
</div>
<!-- 1ERE LIGNE DE CASE   -->

<br>


<!-- 2E LIGNE   -->
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img\info.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">COURS DU JEUDI 20 NOVEMBRE</h5>
        <p class="card-text"> 
        - Début Bases de données SQL (Structured Query Language, // langage de requêtes structurées) <br>
        - Création de base de donnée et de table avec SQL <br>
        - INSERT <br>
        - UPDATE <br>
        - DELETE <br>
        - SELECT <br>
        -SELECT avec des critères <br>
        -Presentation du CRUD (create, read, update, delete)  <br> </p>

      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-info">VOIR LE COURS COMPLET</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img\info.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> COURS DU VENDREDI 21 NOVEMBRE </h5>
        <p class="card-text"> Début de la Création d’une application de suivi de la promo 321 <br>
        - Une page d’accueil <br>
        - Une page dédiée à chaque matière <br> 
        - Une page contenant la liste des élèves et leurs informations <br>
        But de l’application : Permettre un suivi clair et centralisé de la promotion 321  et un bon suivi des cours par matière</p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-info">VOIR LE COURS COMPLET</button>
      </div>
    </div>
  </div>
</div>
<!-- 2E  LIGNE DE CASE   -->

<br>

<!-- 3E LIGNE DE CASE   -->

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img\info3.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> COURS JEUDI 13 NOVEMBRE </h5>
        <p class="card-text"> 
        -Présentation des projets du site vitrine en Groupe (oral et demo) <br>
        -html/ css et librairie CSS (bootstrap ou materialize)</p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-info">VOIR LE COURS COMPLET</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img\info3.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> COURS VENDREDI 14 NOVEMBRE</h5>
        <p class="card-text"> 
          -Continuer sur MERISE <br>
            -elaboration d'un MCD <br>
            -Relation avec cardinalité  <br>
          
          -Introduction du SQL <br> 
            -presentation de MySQL (SGBDD) <br> 
            -creation de base de donnée et de table avec SQL <br> 
            -presentation de l'interface PhpMyAdmin <br> 
            
          -Introduction du PHP <br> 
            -declaration de variable  <br>
            -concatenation <br>
            -condition If ; else <br>

          -HTML et PHP <br>
          -ajouter du PHP dans du HTML <br>
        </p>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-outline-info">VOIR LE COURS COMPLET</button>
      </div>
    </div>
  </div>
</div>


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
