<?php

  /**
   * Fichier qui controle la donnée transmise via l'URL, après avoir cliqué sur le lien 'modif' d'une entrée dans le tableau.
   */
  require_once '../inc/connexBdd_inc.php';
  require_once '../modeles/selectDatasUpdateAdhList_mod.php';

  $updateAdherentId = $_GET['upd_Id'];

  if(isset($updateAdherentId) && is_numeric($updateAdherentId)){

  /* 
    ici j'appel une fonction qui est une requête de selection dans le fichier ......_mod.php, elle me return un 
    objet de type PDOStatement que je stocke dans $currentId. Cela me permettra de travailler à partir de cet objet dans le 
    fichier 'adherentsList_vws.php'
  */
  $currentId = updateSelectId($connectBdd, $updateAdherentId);

  require_once '../views/adherentFormUpdate_vws.php';

  } else {

    // Sinon c'est que l'Id de l'enregistrement à déjà été supprimé puisqu'il n'existe pas.
    header('Location: ../public/index.php');

  }
