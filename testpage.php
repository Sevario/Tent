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

echo "<h1>Opslag Tent</h1><br>";
if (!empty($_POST['adviescheck'])) {
    echo "Breedte: " . $_POST['adviesbreedte'];
    echo "<br>";
    echo "Lengte: " . $_POST['advieslengte'] . "<br>";
}

 else {
    if ( !empty($_POST['breedte'])) {

        echo "Breedte: " . $_POST['breedte'];
        echo "<br>";

    }

    if ( !empty($_POST['lengte'])) {

        echo "Lengte: " . $_POST['lengte'];
        echo "<br>";
    }   

}

if ( !empty($_POST['zijwanden'])) {
    
    echo "Zijwanden: " . $_POST['zijwanden'] . "<br>";
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
echo $deuren . "<br>";
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
echo $opties . "<br>";
}


if ( !empty($_POST['ondergrond'])) {
    
    echo "Ondergrond: " . $_POST['ondergrond'];
    
}
if (!empty($_POST['haringen'])) {
    echo "<br> Er kunnen geen haringen geslagen worden.";
}
//Festival vloer

echo "<h1>Festival vloer</h1><br>";
if (!empty($_POST['vloer'])) {
    echo "Vlonders: " . $_POST['vloer'] . " m²" . "<br>";
}

if ( !empty($_POST['leggen'])) {

    echo "Leggen: " . $_POST['leggen'] . "<br>";

}

if ( !empty($_POST['transport'])) {

    echo "Transport: " . $_POST['transport'] . "<br>";

}

if ( !empty($_POST['straat'])) {

    echo "Ondergrond: " . $_POST['straat'];

}

if (!empty($_POST['haringen_festival'])) {
    echo "<br> Er kunnen geen haringen geslagen worden.";
}

require 'PHPMailer-master\PHPMailerAutoload.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'peterderoos@live.nl';                 // SMTP username
$mail->Password = 'P1eter23';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
//$mail->SMTPDebug = 1;

$mail->setFrom('peterderoos@live.nl', 'Mailer');
$mail->addAddress('daermaethortest@hotmail.com', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Bestelling Donselaar tenten';
$mail->Body    = '<div id="geheel" style="background-color: #f3f6fa;border: 1px solid transparent;border-radius: 5px 5px 5px 5px;padding: 30px;">
                    <div id="logo" style="background-color: black;font-size: 2.4em;border: 1px solid transparent;border-radius: 5px 5px 0 0;padding-left: 30px; padding-right: 5px;padding-top: 5px;padding-bottom: 5px;"><b style="color: white">DONSELAAR</b> <b style="color: #a4d042;">TENTEN</b></div>
                     <h1>Bedankt voor uw aanvraag</h1><br>
                     Wij nemen zo spoedig mogelijk contact met u op.
                     <h2>Aanvraag details</h2>'?> <?php if($_POST['opslagcheck'] == 1){
$mail->Body .= "<table>
        <tr>
            <td><b>Product</b></td>
            <td><b>Aantal</b></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>" . $_POST['lengte'] . " x " . $_POST['breedte'] . " meter " . " </td>
            <td></td>
        </tr>
</table>";
};
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
</body>
</html>



