<?php
require_once("conect.php");
$id=1;
$con->query("UPDATE crud SET NOME='Rafael2' WHERE ID='$id'");