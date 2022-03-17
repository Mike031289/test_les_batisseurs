
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul id="categorie" class="nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Rayons articles</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Fruits</a></li>
                <li><a class="dropdown-item" href="#">Viandes</a></li>
                <li><a class="dropdown-item" href="#">Petit déjeuné</a></li>
                <li><a class="dropdown-item" href="#">Légumes</a></li>
                <li><a class="dropdown-item lienCatalogue" href="#">Tout nos catégories</a></li>
            </ul>
        </li>
</ul>
    <div class="collapse navbar-collapse pt-3 ml-5" id="navbarTogglerDemo03">
    
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Exp: oeufs, vins..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
</nav>

<div id="index-cards_Block" class="card text-white">
            <!-- <img class="card-img" src="" alt="Card image"> -->
            <h1 class="text-dark p-5 mt-5 text-center">Tous nos produits</h1>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="card  text-dark text-center">
                 
                  <div class="card-body row col-lg p-5 m-0">
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">8,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="16.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="#" class="card-text"><button type="button" class="btn btn-dark">14,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                  <div id="index-card" class="card col-lg container-fluid p-0 m-2">
                    <a class="" href="#"><img class="card-img-top index-card-img img-fluid" src="36.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lorem ipsum dolor </h5>
                      <p class="card-text">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>
                      <a href="" class="card-text"><button type="button" class="btn btn-dark">28,00 €</button></a>
                    </div>
                  </div>
                </div>
             
              </div>
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
    