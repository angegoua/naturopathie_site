<?php
    if(isset($_POST['submitMessage'])) {

        //checking if variables exist
        if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['message'])) {

            //checking if variables are not empty
            if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {

                //Checking if it's an email 
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                    //The message
                    $message = $_POST['message'] . ' Mon email est: ' . $_POST['email'];

                    //The subject
                    $subject = $_POST['name'] . ' vous a envoyé un message.'; 

                    // Envoi du mail
                    mail('rider.constant@gmail.com', $subject, $message);

                    $success = true;
                    
                } else {
                    $error = 'Merci d\'entrer une adresse email valide.';
                }
            } else {
                $error = 'Merci de compléter tous les champs...';
            }
        } else {
            $error = 'Erreur !';
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturathome - Accueil</title>
    <meta name="description" content="Naturothome, laisser la nature reprendre ses droits.">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:400,700|Open+Sans+Condensed:300,700|Pompiere&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>
<body>
    <!-- Header start-->
    <header>
        <!-- head-background start -->
        <div class="head-backgroundImage head-backgroundImage--index">
            <div class="button-menu"></div>
            <!-- header navigation menu start-->
            <nav class="head__navigation-menu head__container">
                <div class="head__container">
                    <ul class="head__navigation-menu__list">
                        <li class="head__navigation-menu__listItem"><a href="naturopathie.html" title="Naturopathie">Naturopathie</a></li>
                        <li class="head__navigation-menu__listItem"><a href="ventousotherapie.html" title="Ventousothérapie">Ventousothérapie</a></li>
                        <li class="head__navigation-menu__listItem"><a href="coaching.html" title="Coaching">Coaching</a></li>
                    </ul>
                    <a href="index.php" title="Accueil" class="head__navigation-menu__logo">
                        
                    </a>
                    <ul class="head__navigation-menu__list">
                        <li class="head__navigation-menu__listItem"><a href="who.html" title="Qui suis-je ?">Qui suis-je ?</a></li>
                        <li class="head__navigation-menu__listItem"><a href="ressources.html" title="Ressources">Ressources</a></li>
                        <li class="head__navigation-menu__listItem"><a href="contact.php" title="Contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!-- header navigation menu end -->
            <!-- head__titleDiv start -->
            <div class="head__titleDiv ">
                <h1 class="head__titleDiv__title">Naturathome</h1>
                <h2 class="head__titleDiv__subTitle1">Laisser la nature reprendre ses droits.</h2>
                <h2 class="head__titleDiv__subTitle2">Santé holistique</h2>
            </div>
            <!-- head__titleDiv end -->
            
        </div>
        <!-- head-background end -->
        <a class="head__scroll-button" href="#general-presentation" title="titre">
            <img  src="images/Scroll.png" alt="Bouton de scroll">
        </a>
        <!-- Social network fixed div start -->
        <div class="head__socialNetDiv">
            <a href="https://www.facebook.com/Naturathome-453939802076794/" title="facebook" class="head__socialNetDiv__icon--facebook"></a>
            <a href="https://www.instagram.com/p/ByzlDWrIRWq/?igshid=d0zc5y2ysnqj" title="instagram" class="head__socialNetDiv__icon--instagram"></a>
            <a href="https://www.youtube.com/channel/UCNkx8vex02aq_ublWo9nKRg" title="youtube" class="head__socialNetDiv__icon--youtube"></a>
        </div>
        <!-- Social network fixed div end -->
    </header>
    <!-- Header end-->
    <!-- Main start-->
    <main>
        <!--Section general-presentation start -->
        <div class="separation-dash"></div>
        <section class="general-presentation" id="general-presentation"> 
            <div class="general-presentation__content">
                <h2 class="general-presentation__content__title">Moi en quelques mots</h2>
                <p class="general-presentation__content__text">
                    Je suis élève naturopathe dans la merveilleuse école créée par Pierre-Valentin Marchesseau, fondateur de la naturopathie en France, également ventousothérapeute et coach de vie. Avant cela, j’avais un poste à responsabilité au sein d’une multinationale. Ma vie était rythmée par mon travail et le fameux « métro, boulot, dodo » de la vie parisienne. J’ai un jour décidé de rompre avec cette vie qui ne me correspondait pas et allait, à mon sens, à l’inverse de mes besoins physiologiques. 
                </p>
                <a class="general-presentation__content__link" href="who.html" title="Découvrir mon parcours">Découvrir mon parcours</a>
            </div>
        </section>
        <!--Section general-presentation end -->
        <!--Section services-presentation start -->
        <section class="services-presentation"> 
            <div class="services-presentation__content">
                <div class="services-presentation__content__fix">
                    <h2 class="services-presentation__content__title">Mon univers</h2>
                    <div class="services-presentation__content__services">
                        <a href="naturopahtie.html" class="services-presentation__content__services__item" title="Naturopathie">Naturopathie</a>
                        <a href="ventousothérapie.html" class="services-presentation__content__services__item" title="Ventousothérapie">Ventousothérapie</a>
                        <a href="coaching.html" class="services-presentation__content__services__item" title="Coaching">Coaching</a>
                    </div>
                </div>    
            </div>
        </section>
        <!--Section services-presentation end -->
        <!--Section services-article start -->
        <section class="sercives-articles">
            <div class="separation-dash"></div>
            <div class="article-container">
                <div class="services-articles__article-group">
                    <a href="naturopathie.html" title="Naturopathie"><img src="images/article-naturopathie.png" alt="Naturopathie"></a>
                    <div class="services-articles__article-group__separation-line"></div>
                    <div class="services-articles__article-group__article">
                        <h2>Naturopathie</h2>
                        <p>
                            Durant cette consultation, nous effectuerons un bilan de vitalité basée sur une observation holistique, c’est-à-dire globale de votre être. Je vous expliquerai les bases d’une hygiène de vie naturo en lien avec votre problématique. Vous  repartirez avec un programme sur-mesure pour prendre soin de vous, et progresser sur le chemin de la pleine santé.
                        </p>
                        <a class="services-articles__article-group__article__link" href="naturopathie.html" title="En savoir plus">En savoir plus</a>
                    </div>
                </div>
                <div class="services-articles__article-group none-in-responsive">
                    <div class="services-articles__article-group__article text-align-right ">
                        <h2>Ventousothérapie</h2>
                        <p>
                                La ventousothérapie est une technique ancestrale qui, depuis tout temps, a démontré ses bienfaits thérapeutiques. La pose de ventouse à des endroits précis du corps permet de soulager, voire d’améliorer l’état de santé physique et psychique. Le massage aux ventouses chaudes procure un bien-être et une relaxation profonde.
                        </p>
                        <a class="services-articles__article-group__article__link" href="ventousotherapie.html" title="En savoir plus">En savoir plus</a>
                    </div>
                    <div class="services-articles__article-group__separation-line"></div> 
                    <a href="ventousothérapie.html" title="Ventousotherapie"><img src="images/article-ventousotherapie.png" alt="Ventousotherapie"></a>
                </div>
                <!-- display block in responsive -->
                <div class="services-articles__article-group block-in-responsive">
                     
                    <a href="ventousothérapie.html" title="Ventousotherapie"><img src="images/article-ventousotherapie.png" alt="Ventousotherapie"></a>
                    <div class="services-articles__article-group__separation-line"></div>
                    <div class="services-articles__article-group__article ">
                        <h2>Ventousothérapie</h2>
                        <p>
                            La ventousothérapie est une technique ancestrale qui, depuis tout temps, a démontré ses bienfaits thérapeutiques. La pose de ventouse à des endroits précis du corps permet de soulager, voire d’améliorer l’état de santé physique et psychique. Le massage aux ventouses chaudes procure un bien-être et une relaxation profonde.
                        </p>
                        <a class="services-articles__article-group__article__link" href="ventousotherapie.html" title="En savoir plus">En savoir plus</a>
                    </div> 
                </div>
                <!--  -->
                <div class="services-articles__article-group">
                    <a href="coaching.html" title="Coaching"><img src="images/article-coaching.png" alt="Coaching"></a>
                    <div class="services-articles__article-group__separation-line"></div>
                    <div class="services-articles__article-group__article">
                        <h2>Coaching</h2>
                        <p>
                            Durant cette consultation, nous effectuerons un bilan de vitalité basée sur une observation holistique, c’est-à-dire globale de votre être. Je vous expliquerai les bases d’une hygiène de vie naturo en lien avec votre problématique. Vous  repartirez avec un programme sur-mesure pour prendre soin de vous, et progresser sur le chemin de la pleine santé.
                        </p>
                        <a class="services-articles__article-group__article__link" href="coaching.html" title="En savoir plus">En savoir plus</a>
                    </div>
                </div>
            </div>    
        </section>
        <!--Section services-article end -->
        <!--Section contact start -->
        <section class="contact">
            <h2 class="contact__title">Me contacter</h2>
            <p class="contact__text">
                Pour prendre rendez-vous, en savoir plus sur les activités et/ou mes évènements à venir ou tout autres questions, contactez-moi 
                ci-dessous !
            </p>
            <div class="contact__form" >
                <form action="" method="POST">
                    <input class="contact__form__input" type="text" name="name" placeholder="Prénom">
                    <input class="contact__form__input" type="mail" name="email" placeholder="Adresse Mail">
                    <textarea name="message" id="message" cols="100" rows="10" placeholder="Exprimez-vous"></textarea>
                    <?php
                        if(isset($error)) {
                            echo '<div class="contact__form__notification contact__form__notification--error">' . $error . '</div>';
                        } elseif(isset($success)) {
                            echo '<div class="contact__form__notification contact__form__notification--success">Le message a été envoyé.</div>';
                        }
                    ?>
                    <input class="contact__form__submit" type="submit" value="Envoyer" name="submitMessage">
                </form>
            </div>
            <div class="contact__info">
                <div class="contact__info__phone">
                    <h4>Téléphone</h4>
                    <p>06.52.90.35.49</p>
                </div>
                <div class="contact__info__mail">
                    <h4>E-mail</h4>
                    <p>naturathome@gmail.com</p>
                </div>
                <div class="contact__info__localisation">
                    <h4>Localisation</h4>
                    <p>Mitry-La-Forêt</p>
                </div>
            </div>
        </section>
    </main>
    <!-- Main end -->
    <!-- Footer start -->
    <footer>
        <p>©Naturothome - Tous droits réservés</p>
    </footer>
    <!-- Footer end -->
    <script src="script/script.js"  ></script>
</body>
</html>