<?php
  session_start();
  require_once '../inc/pathDefine_inc.php';
  require_once ROOTPATH . '/modeles/selectDatasAdherentsList_mod.php';
  require_once ROOTPATH . '/views/templates/doctype_tpl.php';
?>

<section id="adherents_list">
  <h1 class="adherents_list-title">Liste des adhérents</h1>

  <!-- Tableau pour afficher les données de la Bdd dans ma page web -> https://www.w3schools.com/css/css_table.asp -->

  <table class="adherents_list-table">

    <thead>
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
        <!-- 
          On preferera la syntaxe "?= .... ?" dans du html, plutôt que '?php echo ... ?'         
        -->
          <td><?= $adherentRow['id']; ?></td>
          <td><?= $adherentRow['pseudo']; ?></td>
          <td><?= $adherentRow['email']; ?></td>
          <td><?= $adherentRow['birthday']; ?></td>

          <section class="adherents_list-links">
            <!-- 
              Suppression d'entrées dans le tableau et la Bdd via des liens qui cibleront l'id. Les liens seront des 'cta' sur lesquels on mettra un style en CSS.
            
              La chaîne de requête après le '?' dans l'URL "?del_Id=<?= $adherentRow['id']; ?>" permet de passer l'id à supprimer comme valeur d'une 
              variable 'del_Id' en GET donc dans l'URL... ATTENTION.
              Si je voulais ouvrir mon lien vers une autre page j'utiliserais l'attribut de la balise <a> target="_blank" avec rel="noopener noreferrer". 
              https://developer.mozilla.org/fr/docs/Web/HTML/Element/a
            -->
            <td class="link_cta">
              <a 
                href="../modeles/deleteAdherentList_mod.php?del_Id=<?= intval($adherentRow['id']); ?>" 
                class="link_cta-delete" 
                title="ATTENTION, Vous allez supprimer l'enregistrement n° <?= $adherentRow['id']; ?>">Suppr
              </a>
            </td>
  
            <!--
              Modifs d'entrées dans le tableau et la Bdd via des liens qui cibleront l'id. Les liens seront des 'cta' sur lesquels on mettra un style en CSS.
  
              Ici je passe la valeur contenue dans intval($adherentRow['id']) dans l'URL via la chaîne de requête après le point d'interrogation. Elle sera
              récupérée pour être utilisée dans le fichier UpdateAdherentDatas_Ctrl.php
            -->
            <td class="link_cta">
              <a 
                href="../Controllers/UpdateAdherentDatas_Ctrl.php?upd_Id=<?= intval($adherentRow['id']); ?>" 
                class="link_cta-update" 
                title="Vous allez modifier l'enregistrement n° <?= $adherentRow['id']; ?>">Modif
              </a>
            </td>
          </section>

        </tr>
      <?php endforeach; ?>
    </tbody>

  </table>

  <a href="../public/index.php" class="cta cta-home">Home</a>
</section>

<hr>

<?php // require_once ROOTPATH . '/views/templates/footer_tpl.php'; ?>