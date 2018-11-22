<?php
require "modele/db.php";
require "modele/historicalManagement.php";
include "template/header.php";
session_start();
$historicals = getHistorical($db);
 ?>
<main class="container"
 <div class="row mt-5">
    <section class="col-md-6 mx-auto">
      <h2 class="historicalH2">Gérer les produits du site</h2>
      <div class="container-fluide">
        <div class="row">
          <table class="table table-hover fontTable">
            <thead class="lightBg">
              <tr>
                <th scope="col">Nom emprunteur</th>
                <th scope="col">Nom materiel</th>
                <th scope="col">Emprunté le</th>
                <th scope="col">Rendu le</th>
              </tr>
            </thead>
            <tbody>
              <?php
               foreach ($historicals as $key => $postHistorical) {
              ?>
              <tr>
                <td><?php echo $postHistorical["nom"] . " " . $postHistorical["prenom"]; ?></td>
                <td><?php echo $postHistorical["nom_materiel"]; ?></td>
                <td><?php echo $postHistorical["date_emprunt"]; ?></td>
                <td><?php echo $postHistorical["date_retour"]; ?></td>
              </tr>
              <?php
               }
               ?>
             </tbody>
           </table>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php
  include "template/footer.php";
   ?>