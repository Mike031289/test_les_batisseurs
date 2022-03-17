<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- les trois liens suivants sont des liens de google font: css => font-family: 'Skranji', cursive;  -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Skranji&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    
    <!-- lien bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <title>test les Bâtisseurs</title>
</head>
<body class="container-fluid p-0">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-choco">
      <a class="navbar-brand" href="index.php"
        ><img
          class="d-block logo-img"
          src="src/img/logo.png"
          alt="Mymachocolat"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbar_item"
        aria-controls="navbar_item"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >Menu
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar_item">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php" id="toHome">Accueil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogue.php" id="to_catalogue">Catalogue</a>
          </li>
       
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Espace client
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Connexion</a></li>
                  <li><a class="dropdown-item" href="#">Inscription</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <li class="nav-item">
            <a class="nav-link" href="contact.php#contact" id="toContact">Nous contacter</a>
          </li>
        </ul>

        <a href="#" class=""
          >
          
              <i class="fa fa-shopping-bag" 
                aria-hidden="true"
              >
            </i>
          </a
        >

      </div>
    </nav>
    <header>
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-ride="carousel"
      >
        <div class="carousel-inner"
          >
            <div
              class="carousel-item active"
              style="background-image: url('src/img/slider/slider1.jpg')"
              >
                <div class="carousel-caption 
                  d-md-block"
                  >
                    <h3 class="poucentagePromo">( Vos courses à domicile !)</h3>
                      <a class="btn btn-lg" 
                        href="#"
                        >
                          J'en profite
                        </a
                      >
                  </div
                >
              </div
            >
            <div
              class="carousel-item"
              style="background-image: url('src/img/slider/slider2.jpg')"
              >
                <div class="carousel-caption d-md-block">
                  <h3 class="poucentagePromo">( Vos courses à domicile !)</h3>
                  <a class="btn btn-lg" href="#">J'en profite</a>
              </div
            >
          </div
        >
        <div
          class="carousel-item"
          style="background-image: url('src/img/slider/slider3.jpg')"
          >
            <div class="carousel-caption d-md-block"
              >
                <h3 class="poucentagePromo">( Vos courses à domicile !)</h3>
                <a class="btn btn-lg" href="#">J'en profite</a>
              </div
            >
          </div
        >
        <div
          class="carousel-item"
          style="background-image: url('src/img/slider/slider4.jpg')"
          >
            <div class="carousel-caption d-md-block"
              >
                <h3 class="poucentagePromo">( Vos courses à domicile !)</h3>
                <a class="btn btn-lg" href="#">J'en profite</a>
              </div
            >
          </div
        >
        <div
          class="carousel-item"
          style="background-image: url('src/img/slider/slider6.jpg')"
          >
            <div class="carousel-caption d-md-block"
              >
                <h3 class="poucentagePromo">( Vos courses à domicile !)</h3>
                <a class="btn btn-lg" href="#">J'en profite</a>
              </div
            >
          </div
        >
      </div
    >
    <!-- <div
      > -->
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      <!-- </div
    > -->
</header> 


<div  class="container-fluid">
    
  <section id="contact" class="row">
    <h1 id="nousContacter" class="col-lg-12 ext-center">Nous contacter</h1>
      <div class="row form_contact pt-5">
        <div class="col-lg">
          <h2 id="apropos" class="">A propos</h2>
          <p>
            Nous sommes une Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus sequi autem odio veniam ipsum repudiandae ut cumque maxime itaque laboriosam tempore rerum aperiam impedit provident blanditiis vel illo, error labore.
            <strong>livrer chez vous</strong> 
          </p>
        </div>

          <form id="contactForm" class="col-lg" method="POST" action="contact.php#apropos" role="form">
            <!-- <h2 class="">Nous écrire</h2> -->
              <div class="row mb-4">
                  <div class="col-md-6">
                      <label for="Last name" class="form-label">Nom ou raison sociale <span class="labelRequierStar">*</span></label>
                      <input type="text" id="nom" name="nom" class="form-control" placeholder="votre nom" aria-label="last name" onblur='verifyInput("nom")'>
                      <span class="error errorMessage">veuillez saisir votre nom</span>
                      <!-- <span class="error errorMessage">Veuillez saisir votre nom</span> -->
                  </div>
                  <div class="col-md-6">
                    <label for="Email" class="form-label mailLabel">Email <span class="labelRequierStar">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="votre email" aria-label="email" onblur='verifyInput("email")'>
                    <span class="errorMessage">entrez un email valide</span>
                </div>
              </div>
              <div class="row mb-4">
                  <div class="col-md-6">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="numéro de téléphone" aria-label="telephone">
                    <!-- <span class="errorMessage">Entrez un telephone valide</span> -->
                </div>
                  <div class="col-md-6">
                    <label for="objet" class="form-label objetLabel">Objet<span class="labelRequierStar"></span></label>
                    <div class="input-group mb-3">
                    <select class="custom-select" name="objet" id="inputGroupSelect02" required>
                      <option selected>choisissez</option>
                      <option value="commande">Lié à une commande</option>
                      <option value="renseignement">Renseignements</option>
                      <option value="catalogue">Demande de catalogue</option>
                      <option value="autres">Autres</option>
                      <!-- <span class="errorMessage"></span> -->
                    </select>
                  </div>
                </div>
              </div>
              <div class="mb-4 ">
                  <label for="message" class="form-label">Message <span class="labelRequierStar">*</span></label>
                  <textarea minlength="10" class="form-control" id="message" name="message" placeholder="votre message ici" rows="5"></textarea>
                  <!-- <span class="errorMessage"></span> -->
                </div>

              

              <div  id="recaptcha" class="row"> 
                <div class="g-recaptcha" data-sitekey="6Lf-u5saAAAAAK7SNOsDsNBBvDiufFeznlteZXDi"></div>
              </div>
              <div id="infosChamp" class="infoChampObligatoir">* Ces informations sont requises pour le traitement de votre demande merci de les  renseigner
                </div>

              <div id="boutonEnvoyer" class="col-lg-2">
                  <input type="hidden" name="choix" class="form-control butonSubmit_disable" value="sendEmail">
                  <input type="hidden" name="page" value="contact">
                  <input type="hidden" name="beforePath" value="./">
                  <input type="submit" class="form-control butonSubmit" value="Envoyer">
                </div>
                <?php
                  if(isset($success)) {
                ?>                
                    <div id="feedBackMessage-success" class="alert alert-success" role="alert">
                <?php echo $success; ?>
                    </div>
                <?php
                  }
                ?>
                
                <?php
                  if(isset($error)) {
                ?>
                  <div id="feedBackMessage-failed" class="alert alert-danger" role="alert">
                <?php echo $error; ?>
                  </div>
                <?php
                  }
                ?>
          </form>
      </div>
      
    <div class="card-deck">
      <div class="card">
        <a href="tel:+33662272975" href="tel:+33662272975">
          <i class="fas fa-phone"></i>
        </a>
        <div class="card-body">
          <h5 class="card-title">APPELEZ NOUS</h5>
          <p class="card-text">
            <small class="text-muted"
              >Pour tous renseignements, vous pouvez nous appeler du lundi
              au samedi de 10h à 18h
            </small>
          </p>
          <p class="card-text">
            <a href="tel:+33662272975">+33662272975</a>
          </p>
        </div>
      </div>
      <div class="card">
        <a href="mailto:mike.agbelou@gmail.com">
          <i class="fas fa-envelope"></i>
        </a>
        <div class="card-body">
          <h5 class="card-title">PAR E-MAIL</h5>
          <p class="card-text">
            <small class="text-muted"
              >Un devis, une idée, une commande ? Nous vous répondons le
              plus rapidement possible</small
            >
          </p>
          <p class="card-text">
            <a href="mailto:mike.agbelou@gmail.com"
              >mike.agbelou@gmail.com</a
            >
          </p>
        </div>
      </div>
      <div class="card">
        <a href="https://www.facebook.com">
          <i class="fab fa-facebook-f"></i>
        </a>
        <div class="card-body">
          <h5 class="card-title">SUIVEZ NOUS</h5>
          <p class="card-text">
            <small class="text-muted"
              >Toutes nos actualités son aussi disponibles sur notre page
              facebook</small
            >
          </p>
          <p class="card-text">
            <a href="https://www.facebook.com"
              >Les Bâtisseurs</a
            >
          </p>
        </div>
      </div>
    </div>
  </section>

</div>

<footer class="footerBlock">
        <p class="col-lg">
          © Les Bâtisseurs 2022 - Tous droits réservés
        </p>
        <p class="col-lg-12">
          <a
            href="https://www.facebook.com/les bâtisseurs"  target="_blank"
            ><i class="fab fa-facebook p-2"></i
          ></a>
          <a href="mailto:mike.agbelou@gmail.com"
            ><i class="fas fa-envelope-open-text p-2"></i
          ></a>
          <a href="tel:+33662272975"
            ><i class="fas fa-phone-volume p-2"></i
          ></a>
        </p>
        <div class="">
          <i
            id="goTopIcone"
            class="fa fa-arrow-circle-up"
            aria-hidden="true"
            onclick="goTopFunction()"
            title="Go to top"
          ></i>
        </div>
      </footer>
   
   
   <!-- le script suivant est un lien qui charge les icones fontawesome -->
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>

     <!-- Ce fichier script de jquery ci dessou nous permet de faire fonctionner le code script qui permet d'afficher le contenu de nos liens de la page lors d'un click en utilisant la methode click et la methode preventedefault de javascript -->
     <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj "
      crossorigin="anonymous "
    ></script>

    <!-- fichier du package bootstrap  et du JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx "
      crossorigin="anonymous "
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="./mvc/view/js/script.js"></script>
    <script src="./mvc/view/js/setActiveLink.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- <script type="text/javascript" src ="../mvc/view/js/script.js"></script> -->

  </body>
</html>
   