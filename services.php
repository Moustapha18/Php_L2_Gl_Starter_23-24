<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Services</title>
</head>
<body>
    <h1>Liste des services</h1>
    <!-- Ajouter le bouton "Nouveau" avec un lien vers la page d'ajout -->
    <a href="ajout.php"><button>ajouter</button></a>

    <!-- Afficher la liste des services existants -->
    <?php
       if(isset($_POST['ajout']))
       {
           $id=$_POST['id'];
           $libelle=$_POST['specialite'];
           $sql="INSERT INTO services (id, services,) value ('$id','$specialite',)";
           $resultat=mysqli_query($connexion,$sql);
           header('location:index.php?page=services');
           
       }
    ?>
</body>
</html>

<?php

require_once('./Database/db_connection.php');
     $services = true;
    include_once './header.php';
    

  
    $connexion = new PDO($dsn , $user , $password);
    $prepa = $connexion->prepare('SELECT * FROM services');
    $cbon=$prepa->execute();
    $doc=$prepa->fetchAll();

?>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">services</h1>
    <table id="myDataTable" class="display" style="width:100%">
    <thead>

            <tr>
                <th>ID</th>
                <th>NOM</th>
          </tr>
</thead>
<tbody>
            <?php foreach($doc as $services): ?>
                <tr>
                <td><?php echo $services['id'] ?></td>
                <td><?php echo $services['specialite'] ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
  </div>
</main>

<?php
    include_once './footer.php'
?>