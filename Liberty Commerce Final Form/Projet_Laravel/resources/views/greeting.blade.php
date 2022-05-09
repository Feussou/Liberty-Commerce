<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../ressources/globefavicon.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header1.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css>
    <link rel="stylesheet" href="css/footer1.css">
    <title>Astroneom</title>
</head>
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
                <div class="connexion">
                    @auth
                    <div class="font-medium text-base text-gray-800" style="padding-left: 400px; margin-left: 2%; margin-top: -10px;" >{{ Auth::user()->name }}</div>
                   
                    <form method="POST" style="margin-top: -150px; margin-right:500px;" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                        
                    </form>

                    <div class="conect">
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                
                            
                                @endif
                        @endauth
                    </div>
                    
            
                
                </div>


            </div>
            <div class="m-nav-toggle">
                <span class="m-toggle-icon"></span>
            </div>
          </div>  
        </nav>
    </header>  
    <body onload="checkCookie()">
            <div class="cookie-consent-modal">
                <div class="content">
                    <h1>Accepter nos Cookies<img src="/ressources/planetecookie.png" style="width:100px;"></h1>
                    <p>Notre site vends des planètes, mais on offre aussi des cookies.<br> On vous pris de bien vouloir accepter ceux-ci.</p>
                    <div class="btns">
                        <button class="btn cancel">refuser</button>
                        <button class="btn accept">accepter</button>
                    </div>
                </div>
            </div>
        <script src="/js/main.js"></script>
        
         <iframe width=99.9%; height="450" src="https://www.youtube-nocookie.com/embed/wnhvanMdx4s?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </body>

   




        <footer>
        <div class="Copyright"><div></div></div>  
            <div class="reseau"><a href="https://twitter.com/AstroNeom" target="_blank"><img class="logotwi" src="../ressources/twitter_logo.png" alt="tweet"></a>
            <a href="https://www.facebook.com/Astroneom-110939604714750" target="_blank"><img class="logofacebook" src="../ressources/Logo_Facebook.png" alt="insta"></a>
    </div>   
    </footer>
</html>