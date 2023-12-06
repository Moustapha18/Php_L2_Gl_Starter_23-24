<?php
require_once('./Database/db_connection.php');
   $docteurs = true;
    include_once './header.php';
    $connexion = new PDO($dsn , $user , $password);
    $prepa = $connexion->prepare('SELECT * FROM docteur');
    $cbon=$prepa->execute();
    $doc=$prepa->fetchAll();
?>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Docteurs</h1>
    
    <?php

//$sql="select * from docteurs";

//$docteurs= mysqli_query($connexion,$sql);


?>
<br>
<br>
<div class="col-md-8 offset-2">
<br>
<br>
<table id="myDataTable" class="display" style="width:100%">
<thead>

            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>EMAIL</th>
                <th>ADDRESSE</th>
                <th>TEL</th>
            </tr>
        
        </thead>
       
        <tbody>
            <?php foreach($doc as $docteurs): ?>
                <tr>
                <td><?php echo $docteurs['id'] ?></td>
                <td><?php echo $docteurs['nom'] ?></td>
                <td><?php echo $docteurs['prenom'] ?></td>
                <td><?php echo $docteurs['email'] ?></td>
                <td><?php echo $docteurs['addresse'] ?></td>
                <td><?php echo $docteurs['tel'] ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
  </div>
  </main>

<?php
    include_once './footer.php'
?>