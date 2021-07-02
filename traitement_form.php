<?php
// =[]${}

    if(isset($_POST["validate"]))
    {
        if(!empty($_POST["user_name"]) !empty($_POST["user_email"]) !empty($_POST["user_subject"]) !empty($_POST["user_message"]))
        {
            $header= "MIME-Version: 1.0\r\n";
            $header.='From: "nom_d'expediteur"<votre@mail.com'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';
            $message='
            <html>
            <body>
            	<div align="center">
            		<br/>
            		<strong>Nom de l\'expéditeur:</strong>'.$_POST['user_name'].'<br/>
            		<strong>Mail de l'\expéditeur:</strong>'.$_POST['user_email'].'<br/>
            		<br/>
            '
        }
    }
?>