
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../ressources/globefavicon.png" />
    <link rel="stylesheet" href="../css/catalogue.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/css/footer1.css"/>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/jupiter.css">  
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css>
    <title>Jupiter</title>
</head>
 
<body>

<header role="header">
        <nav class="menu" role="navigation">
            <div class="inner">
            <div class="m-left">
                <h1 class="logo"><a href="{{ route('greeting') }}">Astroneom</a></h1>
                <a href="{{ route('catalogue') }}" class="m-link"><i class="fa-solid fa-bars-staggered"></i> Catalogue</a>
                <a href="../html/produit.html" class="m-link"><i class="fa-solid fa-satellite"></i></i> Produits</a>
                <a href="{{ route('panier') }}" class="m-link"><i class="fa-solid fa-cart-shopping"></i></i> Panier</a>
            </div>

            <div class="m-right">
                <i class="fa-solid fa-user-astronaut fa-cog fa-spin --fa-primary-color fa-xl" style="--fa-animation-duration: 15s; color: white; margin-right: 70px;"></i> 
                <h2></h2> 

            </div>
            <div class="m-nav-toggle">
                <span class="m-toggle-icon"></span>
            </div>
          </div>  
        </nav>
    </header>

    <div class="produit">
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/rC7XzE9WA4I?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="description">
            New : Toujours au sein de notre collection d’exo planète, la planète New se trouve juste à la sortie de la Voie lactée sur votre gauche après le trou noir.
        </div>
        <div class="caracteristique">
            Rayon : 48 392 km/Distance de la Terre : 8 années-lumière.
        </div>
        <div class="prix">
            Prix :  4300 Billion $
        </div>
        <div class="achat">
            <a href="#"><span>Achat<S/span></a>
        </div>
</body>

<footer>
    <div class="Copyright"><div></div></div>  
          <div class="reseau"><a href="https://twitter.com/AstroNeom" target="_blank"><img class="logotwi" src="../ressources/twitter_logo.png" alt="tweet"></a>
          <a href="https://www.facebook.com/Astroneom-110939604714750" target="_blank"><img class="logofacebook" src="../ressources/Logo_Facebook.png" alt="insta"></a>
  </div>   
</footer>
</html>