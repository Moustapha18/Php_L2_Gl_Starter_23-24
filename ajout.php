<!-- ajout_service.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de Service</title>
</head>
<body>
    <h1>Ajouter un Nouveau Service</h1>

    <!-- Formulaire d'ajout -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form action="ajout.php" method="post">
        <label for="specialite">Specialité</label>
        <input type="text" id="specialite" name="specialite" required>
        <input type="submit" value="Submit">
    </form>

</body>
</html>

        
        <!-- Ajoutez d'autres champs du formulaire selon vos besoins -->

        <a href="services.php"><button type="submit">Ajouter</button>
    </form>

    <!-- Retour vers services.php en cas d'annulation ou succès -->
    <a href="services.php"><button>Annuler</button></a>
</body>
</html>
<?php
// ajouter_service.php
$hote = "localhost";
$user = "root";
$password = "";
$dbname = "l2_gl_starter";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $specialite = $_POST["specialite"];
    // Ajoutez d'autres variables pour les autres champs du formulaire

    try {
        // Connexion à la base de données avec PDO
        $pdo = new PDO("mysql:host=$hote;dbname=$dbname", "$user", "$password");

        // Préparation de la requête SQL
        $stmt = $pdo->prepare("INSERT INTO services (specialite) VALUES (:specialite)");
        // Ajoutez d'autres bindParam() pour les autres champs

        // Liaison des paramètres
        $stmt->bindParam(':specialite', $specialite);
        // Ajoutez d'autres bindParam() pour les autres champs

        // Exécution de la requête
        $stmt->execute();

        // Redirection vers services.php en cas de succès
        header("Location: services.php");
        exit();
    } catch (PDOException $e) {
        // Gestion des erreurs
        echo "Erreur d'ajout de service: " . $e->getMessage();
    }
}
?>

