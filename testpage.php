<?php

if ( !empty($_POST['breedte'])) {
    
    echo "Breedte: " . $_POST['breedte'];
    echo "<br>";
    
}

if ( !empty($_POST['lengte'])) {
    
    echo "Lengte: " . $_POST['lengte'];
    echo "<br>";
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

