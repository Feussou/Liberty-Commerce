
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
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xh3EKDghbuU?controls=0&amp;start=137;&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="description">
            Si vous avez la folie des grandeurs, Jupiter est faite pour vous! 2,5 fois plus massive que toutes les autres planètes du Système solaire réunies, c’est la planète la plus massive que nous vendons. Sera-t-elle bientôt votre ?
        </div>
        <div class="caracteristique">
        Distance du Soleil : 778,5 millions km/Superficie : 61,42 milliards km² Rayon 69 911 km
        </div>
        <div class="prix">
            Prix : 6000 Billion $
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