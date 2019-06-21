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
    <title>Naturathome - Me contacter</title>
    <meta name="description" content="Naturothome, me contacter">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:400,700|Open+Sans+Condensed:300,700|Pompiere&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>
<body>
    <!-- Header start-->
    <header>
        <!-- head-background start -->
        <div class="head-backgroundImage head-backgroundImage--contact">
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
                <h1 class="head__titleDiv__title">Contacts</h1>
            </div>
            <!-- head__titleDiv end -->
            
        </div>
        <!-- head-background end -->
        <a class="head__scroll-button" href="#contact" title="titre">
            <img  src="images/Scroll.png" alt="Bouton de scroll"></img>
        </a>
        <!-- Social network fixed div start -->
        <div class="head__socialNetDiv">
            <a href="https://www.facebook.com/Naturathome-453939802076794/" title="facebook" class="head__socialNetDiv__icon--facebook"></a>
            <a href="https://www.instagram.com/p/ByzlDWrIRWq/?igshid=d0zc5y2ysnqj" title="instagram" class="head__socialNetDiv__icon--instagram"></a>
            <a href="#https://www.youtube.com/channel/UCNkx8vex02aq_ublWo9nKRg" title="youtube" class="head__socialNetDiv__icon--youtube"></a>
        </div>
        <!-- Social network fixed div end -->
    </header>
    <!-- Header end-->
    <!-- Main start-->
    <main>
        <!--Section contact start -->
        <section class="contact" style="background: none;">
            <h2 class="contact__title">Me contacter</h2>
            <p class="contact__text">
                Pour prendre rendez-vous, en savoir plus sur les activités et/ou mes évènements à venir ou tout autres questions, contactez-moi 
                ci-dessous !
            </p>
            <div class="contact__form" >
                <form action="" method="POST">
                    <input class="contact__form__input" type="text" name="name" placeholder="Prénom" style="border: lightgrey 1px solid" required>
                    <input class="contact__form__input" type="mail" name="email" placeholder="Adresse Mail" style="border: lightgrey 1px solid" required>
                    <textarea name="message" id="message" cols="100" rows="10" placeholder="Exprimez-vous"style="border: lightgrey 1px solid" ></textarea>
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
        <!--Section contact end-->
        <!-- Section map start -->
        <section class="map" style="width : 50%; height: 200px; margin: 50px auto;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84771.90644335911!2d2.4070
            09340953527!3d48.39659874574826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5eb0e36
            f68dcd%3A0x6142df5427a81c90!2s91490+Milly-la-For%C3%AAt!5e0!3m2!1sfr!2sfr!4v1560972502586!5m2!1sfr!2sfr" 
            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </section>
        <!-- Section map end-->
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