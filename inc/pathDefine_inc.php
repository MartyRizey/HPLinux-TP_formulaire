<?php
    // Sous Linux : ROOTPATH = /var/www/html
    // define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/Linux/code/TP_formulaire');

    // Sous Windows avec environnement Laragon : ROOTPATH = D:/logiciels/laragon/www    
    define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/tutoriels/HPLinux-TP_formulaire');

    define('CTRLPATH', ROOTPATH . '/Controllers');
    define('INCPATH', ROOTPATH . '/inc');
    define('MDLSPATH', ROOTPATH . '/modeles');
    define('PUBLICPATH', ROOTPATH . '/public');
    define('CSSPATH', PUBLICPATH . '/css');
    define('IMGSPATH', PUBLICPATH . '/imgs');
    define('JSPATH', PUBLICPATH . '/js');
    define('OTHERPATH', PUBLICPATH . '/other');
    define('VWSPATH', ROOTPATH . '/views');
    define('TPLPATH', ROOTPATH . '/views/templates');