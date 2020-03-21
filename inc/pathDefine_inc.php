<?php
    // Sous Linux                              : ROOTPATH = /var/www/html
    // Sous Windows avec environnement Laragon : ROOTPATH = d:/Logiciels/laragon/www
    define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Linux/code/TP_formulaire');
    define('CTRLPATH', ROOTPATH . '/Controllers');
    define('INCPATH', ROOTPATH . '/inc');
    define('MDLSPATH', ROOTPATH . '/modeles');
    define('VWSPATH', ROOTPATH . '/views');
    define('TPLPATH', ROOTPATH . '/views/templates');
    define('BDDCONFIGPATH', ROOTPATH . '/inc/inc_configBdd.php');

    define('PUBLICPATH', ROOTPATH . '/public');
    define('CSSPATH', PUBLICPATH . '/css');
    define('IMGSPATH', PUBLICPATH . '/imgs');
    define('JSPATH', PUBLICPATH . '/js');
    define('OTHERPATH', PUBLICPATH . '/other');
    