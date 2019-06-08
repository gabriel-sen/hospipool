<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="font/roughero/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Six+Caps&display=swap" rel="stylesheet">
    <title> Hospipool - Association à but non lucratif</title>
</head>

<body>
    <!-- Voyeur... -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="img/logo-hospi-pool-nav.svg" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#concept">Le concept </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#actu">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#dons">Les dons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contactez-moi</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="pages/projet-finances.html">Projets et dépenses</a>
                </li>-->
            </ul>
        </div>
    </nav>

    <div class="background_video">
        <div class="video">
            <iframe src="https://www.youtube.com/embed/0ZD711IkW1g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="container constainer--background">
        <section class="section section_concept">
            <div id="concept"></div>
            <div class="row">
                <div class="section_concept_img col-sm">
                </div>
                <div class="section_concept_txt col-md">
                    <h2>
                        Le concept
                    </h2>
                    <p>
                        L’idée est de visiter les jeunes en soin dans les hôpitaux pour leur faire oublier pendant la
                        visite l’anxiété et parfois l’ennuie qu’ils peuvent vivre durant leur séjour.
                    </p>
                    <ul>
                        <li>- C’est gratos pour les hopitaux.</li>
                        <li>- Si l’asso en a les moyens : distribution de comics et de kit de dessins</li>
                        <li>- tout les dons collectés seront investis pour ce projet uniquement</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section_actu">
            <div id="actu"></div>
            <div class="container">
                <h2>
                    Actualités
                </h2>
                <script src="https://assets.juicer.io/embed.js" type="text/javascript"></script>
                <link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
                <ul class="juicer-feed" data-feed-id="hospipool">
                    <!--<h1 class="referral"><a href="https://www.juicer.io">Powered by Juicer</a></h1>-->
                </ul>
            </div>
        </section>
        <section class="container section section_dons">
            <div id="dons"></div>
            <div class="section_dons--center">

                <h2>
                    Les dons
                </h2>
                <h3 class="h3--color-dark">
                    Grâce à vous à ce jour, l’association a récoletée
                </h3>
                <span class="solde_dons">
                    0
                    <span class="solde_dons solde_dons--color-dark">
                        €
                    </span>
                </span>
                <h3 class="h3--color-dark">
                    Sur
                </h3>
                <div class="container_logo_leetchi">
                    <img class="logo_leetchi" src="https://www.helloasso.com/_nuxt/img/fa8ffe7.svg" alt=" il s'agit du logo de helloasso un cercle et un caractère gras">
                </div>

                    <a href="https://www.helloasso.com/associations/hospipool/formulaires/1/widget" class="button" target="_blanck"> Faire un don</a>
                    <div style="width:100%;text-align:center;">Propulsé par <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a></div>

                <p class="h2">Merci à vous</p>
                <p class="p--width">Grâce à vous, je vais pouvoir utiliser vos dons pour offrir aux enfants
                    hospitalisés un comics et/ou un kit de dessin comprenant des crayons de couleurs, une gomme, un
                    taille crayon et un cahier pour qu’ils ne n’ennuient pas durant leurs séjours.
                    <br> Un grand merci à vous.
                </p>
               
                
            </div>
        </section>
        <section class="container section section_contact section_contact_img">
            <div id="contact"></div>
            <div class="contact_placement">
                <h2>
                    Envoie moi un titi message
                </h2>
                <form method="POST" action="mailer.php">
                    <div class="form-group">
                        <label for="name">Ton joli nom</label>
                        <input name="name" type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder=" Exemple : Thanos">
                        <small id="emailHelp" class="form-text text-muted">ou Thables ou ... Cablos ?</small>
                        <label for="mail">Adresse mail</label>
                        <input name="mail" type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Exemple : ThanosLePlusFort@gmail.com">
                        <small id="emailHelp" class="form-text text-muted">Je n'utiliserais pas ton mail pour quoi que ce soit d'autre que te répondre</small>
                        <label for="object">Objet</label>
                        <input name="object" type="text" class="form-control" id="object" aria-describedby="emailHelp" placeholder="Un petit titre à ton message?">
                        <small id="emailHelp" class="form-text text-muted">Ou un mot doux</small>
                        <label for="exampleFormControlTextarea1">Ton gentil message</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Par exemple : Je suis secrètement amoureuse de toi Deadpool, je te trouve beaucoup plus beau que Captain america..."></textarea>
                        <button type="submit" class="btn btn-primary btn-disabled">Envoyer ton message </button>
                        <small id="emailHelp" class="form-text text-muted">(Le formulaire n'est pas encore dispo, utilise Facebook, ou Insta pour me contacter, plus bas dans le Footer)</small>
                    </div>
                </form>
            </div>
        </section>
    </div>


    <footer>
        <div class="container">
            <div class="footer_logo">
                <img src="img/logo-hospipool_big.png" alt="">
            </div>
            <div class="footer_aside">
                <div class="footer_title">
                    <h2>
                        Suivez-moi sur les réseaux
                    </h2>
                </div>
                <div class="footer_reseaux">
                    <ul>
                        <li>
                            <a class="footer_facebook" href="" target="_blank"> Facebook</a>
                        </li>
                        <li>
                            <a class="footer_twitter" href="https://twitter.com/hospipool" target="_blank">Twitter</a>
                        </li>
                        <li>
                            <a class="footer_instagram"  href="https://www.instagram.com/hospipool/" target="_blank">Instagram</a>
                        </li>
                    </ul>
                    <div class="footer_subtitle">
                        <h2>
                            il est beau le logo, nan?
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container thanks">
            <p class="thanks">Special thanks to : <a href="https://fr.wikipedia.org/wiki/Stan_Lee" target="_blank">stan lee   <span> rip</span>   </a>, <a href="https://robliefeldcreations.com/" target="_blank">Rob Liefeld </a>  ,  <a href="https://fr.wikipedia.org/wiki/Fabian_Nicieza" target="_blank">Fabian Nicieza </a> and <a href="https://fr.wikipedia.org/wiki/Ryan_Reynolds" target="_blank">Ryan Reynolds </a> </p>
        </div>
    </footer>
    <!-- todo: partenaires, texte footer de remerciement-->

    <div id="storage" style="display:none;"> </div>


</body>

</html>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141149573-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141149573-1');
</script>