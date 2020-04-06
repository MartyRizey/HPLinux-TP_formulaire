<?php
  session_start();
  require_once '../inc/pathDefine_inc.php';
  require_once ROOTPATH . '/modeles/selectDatasAdherentsList_mod.php';

?>

<h1>Liste des adhérents</h1>

<table>

  <thead id=table>
    <tr>
      <th>Id</th>
      <th>Speudo</th>
      <th>Mail</th>
      <th>Date d'inscription</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach($rows AS $adherentRow): ?>
      <tr>
        <td><?= $adherentRow['id']; ?></td>
        <td><?= $adherentRow['pseudo']; ?></td>
        <td><?= $adherentRow['email']; ?></td>
        <td><?= $adherentRow['birthday']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>

<a href="../public/index.php" class="cta cta-home">Home</a>


<?php 

  // echo '<pre>'; 
  // print_r($rows);
  // echo'</pre>';

?>