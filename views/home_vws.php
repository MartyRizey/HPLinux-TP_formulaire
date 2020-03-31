<?php

    print_r(__DIR__);
    
    require_once VWSPATH . '/templates/doctype_tpl.php';
    // require_once __DIR__ . '/templates/tpl_doctype.php';

?>

    <section id="home_page">
    
        <p class="home_page-date"><?= date('l d F Y'); ?></p>

        <?php
/*
            // message selon si la session existe ou pas
            if(isset($_SESSION)) {

                // Condition ternaire => https://www.php.net/manual/fr/language.operators.comparison.php
                // Verifie si une clé existe dans le tableau => https://www.php.net/manual/fr/function.array-key-exists.php
                echo $message = (!array_key_exixts('pseudo', $_SESSION))

                    // en fonction de si une personne est connéctée on affichera un des 2 messages qui sera stocké dans $message.
                    ? '<h3 class="home_page-message">Pensez à vous inscrire si vous êtes un nouvel utilisateur.</h3>' 
                    : 'Bienvenu(e) dans votre session : ' . $_SESSION['pseudo'];

            }
*/
        ?>    
    
        <h1 class="home_page-title">Page Home</h1>

        <p class="home_page-resume">Si la page vous parez fade ... ne cherchez pas à savoir si je suis un artiste raté. Ici l'objectif n'est pas de faire du Web Design ni de jolies pages, mais essentiellement du Back-end. De comprendre est d'appliquer la transmission de données à travers un <em>formulaire de connexion</em>, un <em>formulaire d'inscription</em> et aussi utiliser une <em>base de données</em> pour stocker et gérer les données.</p>

    </section>

    
<?php
    require_once VWSPATH . '/templates/footer_tpl.php';
    // require_once __DIR__ . '/templates/tpl_footer.php';
?>
   