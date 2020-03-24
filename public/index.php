<?php
    // localhost
    // echo '<pre>'; print_r($_SERVER['SERVER_NAME']); echo '</pre>';

    // /var/www/html
    // echo '<pre>'; print_r($_SERVER['DOCUMENT_ROOT']); echo '</pre>';

    // /var/www/html/Linux/code/TP_formulaire/public
    // echo __DIR__; echo '<br><br>';

    session_start();

    require_once __DIR__ .'/../inc/pathDefine_inc.php';

    /**
     *  https://www.php.net/manual/fr/function.ini-set.php
     *  https://www.php.net/manual/fr/errorfunc.configuration.php#ini.display-errors  
     */
    ini_set('display_errors', true);

    /**
     *  https://www.php.net/manual/fr/function.error-reporting.php
     *  https://www.php.net/manual/fr/errorfunc.configuration.php#ini.error-reporting
     */
    error_reporting(E_ALL);

    require_once VWSPATH . '/home_vws.php';