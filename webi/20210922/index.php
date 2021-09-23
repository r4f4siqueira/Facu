<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="#9e9e9e grey">
    <div class="container center">
            <div class="section #e0f7fa cyan lighten-5">
                <form id="form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <div class="row">
                        <div class="input-field col s5 offset-s3">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="peso" type="text" class="validate">
                                    <label for="peso">Peso</label>
                                </div>
                                <h4>x</h4>
                                <div class="input-field col s12">
                                    <input name="altura" type="text" class="validate">
                                    <label for="altura">Altura</label>
                                </div>
                                <div class="input-field col s12">
                                    <a id="btSubmit" class="waves-effect waves-light btn">Enviar</a>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                    /*if($_POST["email"]=="1"&&$_POST["password"]=="1"){
                                        echo '<i class="material-icons large green-text">lock_open</i>';
                                    }else{
                                        echo '<i class="material-icons large red-text">lock_outline</i>';
                                    }*/
                                    //function imc($peso=$_POST["email"],$altura=$_POST["password"]){
                                    if(($_POST["altura"]*$_POST["altura"])>0){
                                        $resultado = $_POST["peso"]/($_POST["altura"]*$_POST["altura"]);
                                        if($resultado <18.5){
                                            echo '<h4 for="">IMC ='.$resultado.'</h4>
                                                <h4 for="">Magreza</h4>
                                                <h4 for="">Grau de obesidade= 0</h4>';
                                        }
                                        else{
                                            if($resultado>=18.5 && $resultado<=24.9){
                                                echo '<h4 for="">IMC ='.$resultado.'</h4>
                                                <h4 for="">Normal</h4>
                                                <h4 for="">Grau de obesidade= 0</h4>';
                                            }
                                            else{
                                                if($resultado>=25 && $resultado<=29.9){
                                                    echo '<h4 for="">IMC ='.$resultado.'</h4>
                                                    <h4 for="">Sobrepeso</h4>
                                                    <h4 for="">Grau de obesidade= I</h4>';
                                                }
                                                else{
                                                    if($resultado>=30 && $resultado<=39.9){
                                                        echo '<h4 for="">IMC ='.$resultado.'</h4>
                                                        <h4 for="">Obesidade</h4>
                                                        <h4 for="">Grau de obesidade= II</h4>';
                                                    }
                                                    else{
                                                        if($resultado>40){
                                                            echo '<h4 for="">IMC ='.$resultado.'</h4>
                                                            <h4 for="">Obesidade Grave</h4>
                                                            <h4 for="">Grau de obesidade= III</h4>';
                                                        }
                                                        else{
                                                            echo "Aguardando Calculo";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    else{
                                        echo "";
                                    }
                                ?> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(function() {
                $("#btSubmit").click(function() {
                    $("#form").submit();
                });
            });
        </script>

</body>

</html>