<?php
    session_start();
?>

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
                            <div class="row">
                                <?php
                                
                                    if(($_POST["login"]==1)||($_SESSION["login"]==1)){
                                        if(($_POST["senha"]==1)||($_SESSION["senha"]==1)){
                                            $_SESSION["login"]=$_POST["login"] = 1;                                            
                                            $_SESSION["senha"]= $_POST["senha"] = 1;
                                            $_POST["login"]=1;
                                            $_POST["senha"]=1;
                                            ?>
                                            <div>
                                                <h1>wetqwetrqwetqwetqwtqwt</h1>
                                                <a href="logout.php" class="waves-effect waves-light btn">SAIR</a>
                                            </div>
                                            
                                            <?php
                                            $_SESSION["login"]=$_POST["login"];                                            
                                            $_SESSION["senha"]= $_POST["senha"];
                                            $_POST["login"]=1;
                                            $_POST["senha"]=1;
                                        }
                                        else{
                                            ?>
                                            <form id="form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                                <div class="row">
                                                    <div class="input-field col s5 offset-s3">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input name="login" type="text" class="validate">
                                                                <label for="login">Login</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <input name="senha" type="password" class="validate">
                                                                <label for="senha">Senha</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <a id="btSubmit" class="waves-effect waves-light btn">Entrar</a>
                                                            </div>
                                                        </div><?php
                                                echo "senha errada";
                                        }
                                    }
                                    else{
                                        ?>
                                        <form id="form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                                <div class="row">
                                                    <div class="input-field col s5 offset-s3">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input name="login" type="text" class="validate">
                                                                <label for="login">Login</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <input name="senha" type="password" class="validate">
                                                                <label for="senha">Senha</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <a id="btSubmit" class="waves-effect waves-light btn">Entrar</a>
                                                            </div>
                                                        </div><?php
                                        echo "login invalido";
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