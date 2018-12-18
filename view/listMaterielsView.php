<!-- <?php
//if (isset($_SESSION["emprunteur"])) {

?> -->
<?php include "view/template/header.php"; ?>
<main>
<section class="container">
	<div class="d-flex flex-column my-3">
      <div class="d-flex justify-content-between mb-3">
            <h2>Gestion des matériels</h2>
            <div class="d-none d-md-block">
               <a href="materielsAdmin.php?action=add" class="btn btn-primary">Ajouter un matériel</a>
            </div>
            <div class="d-block d-md-none">
              <a href="materielsAdmin.php?action=add" class="btn btn-primary"><i class="fas fa-plus"></i></a>
            </div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
                <thead>
                  <tr class="text-center">
                    <th class="col-3 text-left">Nom</th>
                    <th class="col-2 d-none d-md-table-cell">N° de série</th>
                    <th class="col-3 d-none d-md-table-cell">Description</th>
                    <th class="col-1 d-none d-lg-table-cell">Etat</th>
                    <th class="col-1 d-none d-lg-table-cell">Accessibilité</th>
                    <th class="col-1">Modifier</th>
                    <th class="col-1">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // On récupère tout le contenu de la table materiel
                    //$result = getMateriels($db);
                    // On affiche chaque entrée une à une
                    foreach ($materiels as $key => $value) {
                  ?>
                  <tr class="text-center">
                    <td class="text-left"><?php echo $value["nom"]; ?></td>
                    <td class="d-none d-md-table-cell"><?php echo $value["num_serie"]; ?></td>
                    <td class="d-none d-md-table-cell"><?php echo $value["description"]; ?></td>
                    <td class="d-none d-lg-table-cell"><?php echo ($value["etat"] == 1)?"En stock":"Indisponible"; ?></td>
                    <td class="d-none d-lg-table-cell"><?php echo ($value["acces"] == 1)?"Libre":"Restreint"; ?></td>
                    <td><a href="materielsAdmin.php?action=edit&id=<?php echo $value["id"]; ?>"><i class="fas fa-edit fa-2x"></i></a></td>
                    <td><a href="materielsAdmin.php?action=delete&id=<?php echo $value["id"]; ?>"><i class="fas fa-times fa-2x"></i></a></td>
                  </tr>
                  <?php
                    }
                  ?>
              </tbody>
            </table>
      </div>

  </div>
</section>
</main>
<?php
include "view/template/footer.php";
// }else {
//   header("Location:index.php?message=0") ;
//   exit;
// }

 ?>