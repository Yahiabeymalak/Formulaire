<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);

    // Affichage des données
    echo "<h2>Informations reçues :</h2>";
    echo "Nom : " . $nom . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Adresse : " . $adresse . "<br>";
    echo "Mot de passe : " . $mot_de_passe . "<br>";
}
?>

</body>
</html>