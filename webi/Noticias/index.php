<?php
$arr = array(
    array("titulo" => "OS 10 MOMENTOS DE RAIVA MAIS ÉPICOS DOS ANIMES", "icone" => "flash_on", "conteudo" => '<iframe width="350" height="315" src="https://www.youtube.com/embed/XBneYOTswuE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    array("titulo" => "Dota 2 WTF Moments 405 / WTF Memes", "icone" => "group", "conteudo" => '<iframe width="350" height="315" src="https://www.youtube.com/embed/JjGQMztoM30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    array("titulo" => "ANDROID STUDIO 2021 - COMO CRIAR UM APLICATIVO DO ZERO", "icone" => "settings", "conteudo" => '<iframe width="350" height="315" src="https://www.youtube.com/embed/LhPWQJqPRAA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    array("titulo" => "Por que é Matematicamente IMPOSSÍVEL de Resolver o Xadrez", "icone" => "adb", "conteudo" =>'<iframe width="350" height="315" src="https://www.youtube.com/embed/01Ozf8LRof8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    array("titulo" => "NIKOLA TESLA the most wronged inventor in history", "icone" => "add_a_photo", "conteudo" => '<iframe width="350" height="315" src="https://www.youtube.com/embed/pYP7OGTdYY8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    array("titulo" => "DISPOSITIVOS QUE VOCÊ VAI QUERER COMPRAR AGORA MESMO", "icone" => "add_alarm", "conteudo" => '<iframe width="350" height="315" src="https://www.youtube.com/embed/OHbJ9394Y9c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>UA Noticias</title>
    <link rel="shortcut icon" href="https://lh6.googleusercontent.com/ZsnUOsYuT4HiJ3GlV0gEVFiKManrG91S7-a96prqco2WzDaxGScWGnugdyRCbJl70qNjlQ=w16383" type="image/x-icon">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body class="green">
    <?php
        include("nav.html");
    ?>

    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <?php
                $news = Array();
                while(sizeof($news)<3){
                    $num = rand(0,sizeof($arr)-1);
                    if(!in_array($num,$news))
                        array_push($news,$num);
                }
                
                foreach ($news as $key => $num) {
                    $value = $arr[$num];
                ?>
                    <div class="light-green lighten-1 col s10 m4">
                        <div class="icon-block">
                            <!--<h2 class="center light-blue-text"><i class="material-icons"><?php echo $value["icone"];?></i></h2>-->
                            <h5 class="center"><?php echo $value["titulo"]; ?></h5>
                            <p class="light"><?php echo $value["conteudo"]; ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <br><br>
        </div>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>