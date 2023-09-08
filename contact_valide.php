<?php

try {
    $mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=repertoire;charset=utf8;port=3306', 'root', 'root');
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $exception) {
    die('Erreur : '.$exception->getMessage());
}

$postData = $_POST;

if (!isset($postData['name']) || !isset($postData['firstname']))
{
	echo('Il faut un nom et un prenom pour soumettre le formulaire.');
    return;
}	

$email = $postData['email'];
$name = $postData['name'];
$firstname = $postData['firstname'];
$message = $postData['message'];

// // Faire l'insertion en base
$insertMessage = $mysqlClient->prepare('INSERT INTO message(nom, prenom, adresse_mail, message) VALUES (:nom, :prenom, :adresse_mail, :message)');
$insertMessage->execute([
    'nom' => $name,
    'prenom' => $firstname,
    'adresse_mail' => $email,
    'message' => $message,
    
]);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'envoi</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<?php include_once('header.php'); ?>
<body>
    <div class="container">
     <h1>Message bien envoyé !</h1>
        
        <div class="card">   
        <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email Adresse</b> : <?php echo($email); ?></p>
                <p class="card-text"><b>Nom</b> : <?php echo($name); ?></p>
                <p class="card-text"><b>Prenom</b> : <?php echo($firstname); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo($message); ?></p>

            </div>
        </div>
    </div>
</body>
<a href="index.php" class="btn btn-primary mt-5">RETOUR</a>
</html>