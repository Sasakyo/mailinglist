<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">

    <title>PTSD - Projet Top Secret Démentiel</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="css/layouts/pure-min.css">

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/grids-responsive-min.css">
      
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/layouts/font-awesome.css">

    <link rel="stylesheet" href="css/layouts/marketing.css">
    
</head>

<body>
<?php

$connexion = new PDO('mysql:host=localhost;dbname=sarahnajjar','sarahnajjar', '8WpaF7aFlsm#y-JI');

if(strtotime($dateInscription." + 30 minutes") > time()) {
	$sql = 'UPDATE `mailing` SET `confirmation` = 1 WHERE `mail`='.$connexion->quote($_GET['mail']);
	$connexion->exec($sql);
	$mail = $_GET['mail'];
	$to      = $mail;
    $subject = 'Confirmation PTSD terminée';
    $message = 'Votre inscription est terminée ! Si vous voulez vous désinscrire, voici un lien qui vous permettra de le faire : http://sarahnajjar.be/php/mailinglist/desinscription.php?mail='.$mail;
    $headers = 'From: sarahnajjar6@gmail.com' . "\r\n" .
    'Reply-To: sarahnajjar6@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
     mail($to, $subject, $message, $headers);
     header('Location: index.php');

     
}else {
	$sql = 'DELETE FROM `mailing` WHERE `mail` = '.$connexion->quote($_GET['mail']);
	$connexion->exec($sql);
	echo "Tu as été trop long !";
}

?>

</body>
</html>

