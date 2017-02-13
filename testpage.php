<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <script src="js/jquery.js"></script>
    <script src="js/tent.js"></script>
    <title></title>
</head>
<body>




<?php

//OPSLAGTENT

$lengte;
$breedte;
if (!empty($_POST['adviescheck'])) {
//    echo "Breedte: " . $_POST['adviesbreedte'];
    $breedte = $_POST['adviesbreedte'];
//    echo "<br>";
//    echo "Lengte: " . $_POST['advieslengte'] . "<br>";
    $lengte = $_POST['advieslengte'];
}

 else {
    if ( !empty($_POST['breedte'])) {

//        echo "Breedte: " . $_POST['breedte'];
//        echo "<br>";

        $breedte = $_POST['breedte'];
        
    }

    if ( !empty($_POST['lengte'])) {

//        echo "Lengte: " . $_POST['lengte'];
//        echo "<br>";
        
        $lengte = $_POST['lengte'];
    }   

}

if ( !empty($_POST['zijwanden'])) {
    
//    echo "Zijwanden: " . $_POST['zijwanden'] . "<br>";
}


//DEUREN CHECK
$deuren = "Deuren: ";
if ( !empty($_POST['rol_deur'])) {
    
    $deuren = $deuren . $_POST['rol_deur'] . ", ";
}
if (!empty($_POST['overhead_deur'])) {
    
        $deuren = $deuren . $_POST['overhead_deur'] . ", ";
        
}
if (!empty($_POST['enkele_entree_deur'])) {
    
        $deuren = $deuren . $_POST['enkele_entree_deur'] . ", ";
        
}

if (!empty($_POST['dubbele_entree_deur'])) {
    
        $deuren = $deuren . $_POST['dubbele_entree_deur'] . ", ";
        
}

if (!empty($_POST['geendeur'])) {
    
        $deuren = "Geen Deuren";
        
}
if ($deuren != "Deuren: "){
//echo $deuren . "<br>";
}
//OPTIES CHECK
$opties  = "Opties: ";

if ( !empty($_POST['verlichting'])) { 
    $opties = $opties . $_POST['verlichting'] . ", ";
}
if ( !empty($_POST['verwarming'])) { 
    $opties = $opties . $_POST['verwarming'] . ", ";
}
if ( !empty($_POST['systeemvloer'])) { 
    $opties = $opties . $_POST['systeemvloer'] . ", ";
}
if ( !empty($_POST['geenopties'])) { 
    $opties = "Geen Opties";
}

if ($opties != "Opties: ") {
//echo $opties . "<br>";
}


if ( !empty($_POST['ondergrond'])) {
    
//    echo "Ondergrond: " . $_POST['ondergrond'];
    
}
if (!empty($_POST['op_haringen'])) {
//    echo "<br> Er kunnen geen haringen geslagen worden.";
}
//Festival vloer



require 'PHPMailer-master\PHPMailerAutoload.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'peterphptester@hotmail.com';                 // SMTP username
$mail->Password = 'P1phptester';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
//$mail->SMTPDebug = 1;

$mail->setFrom('peterphptester@hotmail.com', 'Mailer');
$mail->addAddress('daermaethortest@hotmail.com', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Aanvraag factuur';
$mail->Body    = '<div id="geheel" style="background-color: #f3f6fa;border: 1px solid transparent;border-radius: 5px 5px 5px 5px;padding: 30px;">
                    <div id="logo" style="background-color: black;font-size: 2.4em;border: 1px solid transparent;border-radius: 5px 5px 0 0;padding-left: 30px; padding-right: 5px;padding-top: 5px;padding-bottom: 5px;"><b style="color: white">DONSELAAR</b><b style="color: #a4d042;">TENTEN</b></div>
                     <h1>Bedankt voor uw aanvraag</h1><br>
                     Wij nemen zo spoedig mogelijk contact met u op.
                     <h2>Aanvraag details</h2>'?> <?php if(!empty($_POST['opslagcheck'])){
$mail->Body .= "<table style='border-collapse: collapse;width: 85%;'>
        <tr>
            <td style='border-bottom: 1px solid black;'><b>Product</b></td>
            <td style='border-bottom: 1px solid black;width: 50px;'><b>Aantal</b></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'></td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>-Opslagtent- " . $lengte . " x " . $breedte . " meter " . " </td>
            <td style='border-bottom: 1px solid black;'>1</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Zijwanden: " . $_POST['zijwanden'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>$deuren</td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>$opties</td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Ondergrond: " . $_POST['ondergrond'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'> " . $_POST['op_haringen'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
</table><br>";
};?>
<?php if(!empty($_POST['festivalcheck'])){
    $mail->Body .= "<table style='border-collapse: collapse;width: 85%;'>
        <tr>
            <td style='border-bottom: 1px solid black;'><b>Product</b></td>
            <td style='border-bottom: 1px solid black;width: 50px;'><b>Aantal</b></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'></td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>-Festival vloer-</td>
            <td style='border-bottom: 1px solid black;'> " . $_POST['vloer'] . " m2 " . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Gelegd/ongelegd: " . $_POST['leggen'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Transport: " . $_POST['transport'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'> " . $_POST['op_haringen'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
</table><br>";
};?>

<?php if(!empty($_POST['aluhalcheck'])){
    $mail->Body .= "<table style='border-collapse: collapse;width: 85%;'>
        <tr>
            <td style='border-bottom: 1px solid black;'><b>Product</b></td>
            <td style='border-bottom: 1px solid black;width: 50px;'><b>Aantal</b></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'></td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>-Aluhal- " . $_POST['alu_lengte'] . " x " . $_POST['alu_breedte'] . " meter " . " </td>
            <td style='border-bottom: 1px solid black;'>1</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Vloer: " . $_POST['alu_vloeren'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Opties: " . $_POST['alu_opties'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Toebehoren: " . $_POST['alu_toebehoren'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Ondergrond: " . $_POST['alu_ondergrond'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'> " . $_POST['alu_haringen'] . " </td>
            <td style='border-bottom: 1px solid black;'></td>
        </tr>
</table>";
};


        if ($_POST['nawdrop']==1) { 
            
$mail->body .=" <table style='border-collapse: collapse;width: 85%;'>
        <tr>
            <td style='border-bottom: 1px solid black;'><b>Product</b></td>
            <td style='border-bottom: 1px solid black;width: 50px;'><b>Aantal</b></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Bedrijfsnaam: </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['bedrijfsnaam'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Contactpersoon: </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Contactpersoon'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Adres:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Adres'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Postcode:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Postcode'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Plaats:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Plaats'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Land:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Land'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Telefoon Nummer:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Tel.nr'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Mobiel Nummer:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Mobiel.nr'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Email:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Email'] . "</td>
        </tr>
    </table>";
    }
    else if ($_POST['nawdrop']==2){
$mail->body .="<table style='border-collapse: collapse;width: 85%;'>
        <tr>
            <td style='border-bottom: 1px solid black;'><b>Product</b></td>
            <td style='border-bottom: 1px solid black;width: 50px;'><b>Aantal</b></td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Naam:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Naam'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Adres:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Adres'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Postcode:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Postcode'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Plaats:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Plaats'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Land:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Land'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Telefoon Nummer:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Tel.nr'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Mobiel Nummer:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Mobiel.nr'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Email:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Email'] . "</td>
        </tr>
        ";
        if ($_POST['check1'] == 1) {
$mail->body .= "
         <tr>
         <td><b>Afwijkend Adres</td>
         <td></td>
         </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Adres:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Adres2'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Plaats:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Plaats2'] . "</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid black;'>Land:  </td>
            <td style='border-bottom: 1px solid black;'>" . $_POST['Land2'] . "</td>
        </tr>
       
        </table>";
        }
    }
    
    
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Uw aanvraag is succesvol verstuurd naar het ingevulde emailadres';
}
?>
</body>
</html>



