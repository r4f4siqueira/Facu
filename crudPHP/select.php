<?php
require_once("conect.php");

$dados = $con->query("SELECT * from crud ORDER BY id");
while($row=$dados->fetch_array()){
    echo $row['id']." | ".$row['nome'];
}