@extends('layouts.default')
@section('main')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../ressources/globefavicon.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/catalogue.css">
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="css/header2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue test</title>
</head>
<body>

<div class="contenaire">    
    <div class="carte">
        <div class="card-jupiter">
            <div class="content-jupiter">
                <div class="picture-jupiter">
                    <img src="../ressources/Jupiter.jpg" style="border-radius: 60%;">
                </div>
                <h1>JUPITER</h1>
                <p>Jupiter : Si vous avez la folie des grandeurs, Jupiter est faite pour vous !2,5 fois plus massive que toutes les autres planètes du Système solaire réunies, c’est la planète la plus massive que nous vendons. Sera-t-elle bientôt votre ? Prix : 6000 Billion $ / Distance du Soleil : 778,5 millions km / Superficie : 61,42 milliards km² Rayon 69 911 km</p>
                <a button onclick="alert('Jupiter ajouté au panier')" href="#">Achat</a>
                <a href="{{ route('jupiter') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-mars">
            <div class="content-mars">
                <div class="picture-mars">
                    <img src="../ressources/is_mars.jpg" style="border-radius: 60%;">
                </div>
                <h1>MARS</h1>
                <p>Prochain Checkpoint de la conquête spatiale, La voisine de notre belle planète Terre, est à vendre ! L’alternance entre le jour et la nuit s’y fait au même rythme que sur notre planète. Vous ne risquez pas d’être dépaysé ! 5000 Billion $ / Superficie =144,8 millions km² / Rayon = 3 389,5 km</p>
                <a button onclick="alert('Mars ajouté au panier, bon choix!')" href="#">Achat</a>
                <a href="{{ route('mars') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-lune">
            <div class="content-lune">
                <div class="picture-lune">
                    <img src="../ressources/lune.jpg" style="border-radius: 60%;">
                </div>
                <h1>lune</h1>
                <p>Lune : Une fois lancé dans l’achat de planète, on a l’impression de ne jamais en avoir assez. Et quoi de mieux qu’un beau Satellite naturel pour compléter votre collection ? Rayon = 1 737,4 km / Superficie = 21,3 millions de km² / Prix : 2450 Billion $</p>
                <a button onclick="alert('Lune ajouté au panier, vous avez du goût !')"href="#">Achat</a>
                <a href="{{ route('lune') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-exoplanete">
            <div class="content-exoplanete">
                <div class="picture-exeoplanete">
                    <img src="../ressources/exoplanete.png" style="border-radius: 80%; width: 80px;height: 80px;">
                </div>
                <h1>Exoplanete</h1>
                <p>Exoplanète : Exo à été renommée par l’équipe marketing d’Astroneom. D’une extrême rareté et peu d’informations, comme toutes les exoplanète. Prix : 2000 Billion $</p>
                <a button onclick="alert('Exoplanete ajouté au panier, sur le point de devenir propriétaire du bijou ! ')" href="#">Achat</a>
                <a href="{{ route('exoplanete') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-mercure">
            <div class="content-mercure">
                <div class="picture-mercure">
                    <img src="../ressources/mercure.jpg" style="border-radius: 80%; width: 80px;height: 80px;">
                </div>
                <h1>Mercure</h1>
                <p>Mercure : Au dessus c’est le Soleil ! Dans la mythologie grecque, il accompagne et protège les commerçants. Voici pour vous, Mercure. Première planète du système solaire, elle peut être votre pour un prix défiant toute concurrence 1000 Billion $ - Superficie = 74,8 millions km² / Rayon = 2 439,7 km</p>
                <a button onclick="alert('Mercure ajouté au panier, de quoi apprendre la mythologie')" href="#">Achat</a>
                <a href="{{ route('mercure') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-neptune">
            <div class="content-neptune">
                <div class="picture-neptune">
                    <img src="../ressources/neptune.jpg" style="border-radius: 60%; width: 90px; height:90px;">
                </div>
                <h1>NEPTUNE</h1>
                <p>Neptune : 17 fois la masse de la Terre, et 4 fois son diamètre, elle est aussi la deuxième planète la plus eloignée du Soleil au sein de notre système solaire. 4500 Billion $ / Superficie = 7,618 milliards km² / Rayon = 24 622 km</p>
                <a  button onclick="alert('Neptune ajoutée au panier, nos equipes on eu du mal à la portée')" href="#">Achat</a>
                <a href="{{ route('neptune') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-venus">
            <div class="content-venus">
                <div class="picture-venus">
                    <img src="../ressources/venus.jpg" style="border-radius: 60%; width: 90px; height:90px;">
                </div>
                <h1>VENUS</h1>
                <p>Vénus : Féru de mythologie grecque ? Vénus est la plus chaude ! Deuxième planète à partir du Soleil, Vénus profite d’un rayonnement deux fois supérieur à celui de la Terre, Pensez à prendre votre crème solaire ! Pour un prix attractif, la déesse de l’amour peut être à vous, alors n’hésitez plus ! Prix = 1989 Billion $/ Superficie = 460,2 millions km² / Rayon = 6 051,8 km</p>
                <a button onclick="alert('Venus ajoutée au panier, attention les coeurs à prendre !')" href="#">Achat</a>
                <a href="{{ route('venus') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-gj-504">
            <div class="content-gj-504">
                <div class="picture-gj-504">
                    <img src="../ressources/gj-504.jpg" style="border-radius: 60%; width: 90px; height:90px;">
                </div>
                <h1>GJ-504</h1>
                <p>gj-504 : Loin des yeux près du coeur. Exclusivement chez Astroneom, « la planète rose » vous tend les bras. 4 fois plus massive que Jupiter, et âgée de seulement 160 millions d'années, c’est une planète quasi-neuve. Prix : 4300 Billion $ / Rayon : 68 632 km / Distance de la Terre : 57 années-lumière.</p>
                <a button onclick="alert('gj-405 ajoutée au panier, belle couleur, pratique pour ce démarqué !')" href="#">Achat</a>
                <a href="{{ route('gj') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-triton">
            <div class="content-triton">
                <div class="picture-triton">
                    <img src="../ressources/triton.jpg" style="border-radius: 60%; width: 90px; height:90px;">
                </div>
                <h1>TRITON</h1>
                <p>Triton : Colosse des 14 Satellites naturels de Neptune, Triton est la « septième lune » de Neptune. Astroneom vous propose une réduction à l’achat si vous êtes déjà propriétaire de Neptune ! Prix : 2999 B$ / Rayon : 1 353,4 km / Distance de la Terre : 4,338 milliards km / Orbite : Neptune</p>
                <a button onclick="alert('Triton ajouté au panier, de quoi être satélisé')" href="#">Achat</a>
                <a href="{{ route('triton') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-kepler">
            <div class="content-kepler">
                <div class="picture-kepler">
                    <img src="../ressources/kepler.png" style="border-radius: 60%; width: 90px; height:90px;">
                </div>
                <h1>KEPLER 10-C</h1>
                <p>Godzilla, Méga terre, difficile de faire plus cool comme surnom. Cette exoplanète est pour beaucoup de scientifiques semblable à la Terre. Ce qui la rend assez rare dans un univers infini. Prix : 4999 Billion $ / Distance de la Terre : 564,3 années-lumière / Rayon : 14 972 km</p>
                <a button onclick="alert('Kepler ajoutée au panier, bravo pour ce méga achat !')" href="#">Achat</a>
                <a href="{{ route('kepler') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-new">
            <div class="content-new">
                <div class="picture-new">
                    <img src="../ressources/new.jpg" style="border-radius: 60%; width: 90px; height:90px;">
                </div>
                <h1>NEW</h1>
                <p>New : Toujours au sein de notre collection d’exo planète, la planète New se trouve juste à la sortie de la Voie lactée sur votre gauche après le trou noir. Prix : 4300 Billion $ / Rayon : 48 392 km / Distance de la Terre : 8 années-lumière.</p>
                <a button onclick="alert('New ajoutée au panier, collection exeptionnelle en vue !')" href="#">Achat</a>
                <a href="{{ route('new') }}">Info</a>
            </div>
        </div>
    </div>

    <div class="carte">
        <div class="card-exo">
            <div class="content-exo">
                <div class="picture-exo">
                    <img src="../ressources/exo.png" style="border-radius: 60%; width: 90px; height:90px;">
                </div>
                <h1>EXO</h1>
                <p>Exo : Est-t-elle en feu ? Est-ce un dragon qui fait le tour de la planète ? Tant de mystères entourent les exoplanètes… Peut être que ce sera à vous de les révéler ! Prix : 3200 Billion $ / Rayon : 34 376 km / Distance de la Terre : 32 années-lumière.</p>
                <a button onclick="alert('Exo ajoutée au panier, Woaw, sacré portefeuille')" href="#">Achat</a>
                <a href="{{ route('exo') }}">Info</a>
            </div>
        </div>
    </div>

</div>
</body>
<footer>
        <div class="Copyright"><div></div></div>  
            <div class="reseau"><a href="https://twitter.com/AstroNeom" target="_blank"><img class="logotwi" src="../ressources/twitter_logo.png" alt="tweet"></a>
            <a href="https://www.facebook.com/Astroneom-110939604714750" target="_blank"><img class="logofacebook" src="../ressources/Logo_Facebook.png" alt="insta"></a>
    </div>   
</footer>
</html>


@endsection