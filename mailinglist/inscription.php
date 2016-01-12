<?php

$connexion = new PDO('mysql:host=localhost;dbname=sarahnajjar','sarahnajjar', '8WpaF7aFlsm#y-JI');
//$connexion = new PDO('mysql:host=localhost;dbname=mailinglist','root', '');



$errors = array();

if ($_POST){

        //honeypot
        if ($_POST['prenom'] != ''){
        	die('Villain bot.');
        }

    	//1.Nettoyage
    	$mail = trim(strip_tags($_POST['mail']));

        //2.validation
        //username vide ? 
        if($mail == ''){
        	$errors['mailvide']= "Je ne peux rien faire sans mail !";
        }

        //3.Insertion dans la BDD
        if(empty($errors)){
        	 echo "Vous avez reçu un mail de confirmation à remplir dans les 30 minutes !";
        	 $sql =  'INSERT INTO `mailing` (`mail`,`dateinscription`) VALUES ('.$connexion->quote($mail).',NOW())';
             $status = $connexion->exec($sql);
             $to      = $mail;
		     $subject 
= 'Confirmation PTSD';
		     $message = 'Pour confirmer votre inscription, cliquez sur le lien ci-dessous : http://sarahnajjar.be/php/mailinglist/confirmation.php?mail='.$mail;
		     $headers = 'From: sarahnajjar6@gmail.com' . "\r\n" .
		     'Reply-To: sarahnajjar6@gmail.com' . "\r\n" .
		     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
        	}
        	
        	
    }