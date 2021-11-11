<?php
require_once("conect.php");
$id = 1;
$con->query("DELETE from crud WHERE ID='$id'");