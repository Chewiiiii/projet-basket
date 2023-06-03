<?php
include "./modele/AfficherConvocation.php";

$equipes = getEquipe();
$arbitres = getArbitre();
include "./vue/vueAfficherConvocation.php";
?>

