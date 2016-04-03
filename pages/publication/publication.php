<?php
require_once "../../connexion.php";
 ?>

  <!-- partie header -->

  <?php include("../../header.php");
        include("../../sidebar.html");
   ?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Publications
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Liste des publications</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Intitule</th>
                <th>Description</th>
                <th>Année pub</th>
                <th>Date création</th>
                <th>Author</th>
                <th>Type</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php
                $sql = "select p.intitule, p.description, p.anneePublication, p.dateCreation, pers.nom, pers.prenom, tp.intitule tintitule from publication p, enseignant e, personne pers, typepublication tp where p.idType=tp.idType and p.numPers=e.numPers and e.numPers=pers.numPers order by numPubli DESC";
                $rs = $con->query($sql);
                while($row = $rs->fetch_assoc()){
                  echo "<tr>";
                    echo "<td>".$row['intitule']."</td>";
                    echo "<td>".$row['description']."</td>";
                    echo "<td>".$row['anneePublication']."</td>";
                    echo "<td>".$row['dateCreation']."</td>";
                    echo "<td>".$row['nom']." ".$row['prenom']."</td>";
                    echo "<td>".$row['tintitule']."</td>";
                    echo "<td></td>";
                  echo "</tr>";
                }
                $con->close();
                 ?>
              </tbody>
              <tfoot>
              <tr>
                <th>Intitule</th>
                <th>Description</th>
                <th>Année pub</th>
                <th>Date création</th>
                <th>Author</th>
                <th>Type</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>


<?php include("../../footer.html"); ?>
