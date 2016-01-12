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
    $sql = 'DELETE FROM `mailing` WHERE `mail` = '.$connexion->quote($_GET['mail']);
	$connexion->exec($sql);
	echo "Vous avez été supprimé avec succès !";

?>

</body>
</html>