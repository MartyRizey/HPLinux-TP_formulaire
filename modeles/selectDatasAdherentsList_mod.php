<?php

require_once __DIR__ . '/../inc/pathDefine_inc.php';
require_once ROOTPATH . '/inc/connexBdd_inc.php'; 
// require_once '../inc/connexBdd_inc.php';

$selectDisplayAdherentsDatas = "SELECT id, pseudo, email, birthday FROM usersregistred";

$pdoStmt = $connectBdd->prepare($selectDisplayAdherentsDatas);

$pdoStmt->execute();

$rows = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);

  