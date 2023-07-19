<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>afficher dans la page user.php les données du formulaire transmis.</h1>
<?php
        if(isset($_GET['prenom']) && isset($_GET['nom'])){
            echo 'Mon nom est ' . $_GET['nom'] . ', et mon prénom est ' . $_GET['prenom'] . ', par la methode "GET"';
        }
        if(isset($_POST['prenom']) && isset($_POST['nom'])){
            echo 'Mon nom est ' . $_POST['nom'] . ', et mon prénom est ' . $_POST['prenom'] . ', par la methode "POST"';
        }
?>
</body>
</html>
