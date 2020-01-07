<?php
session_start();
$couleur = $_POST["nom"];
$_SESSION["color"] = $couleur;
?>
<body style = background:<?php echo $couleur;?>></body>

