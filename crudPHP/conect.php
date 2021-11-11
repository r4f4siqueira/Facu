<?php
$con = new mysqli("localhost","root","","rafasiq");
if($con->connect_error){
    echo "no conect";
}