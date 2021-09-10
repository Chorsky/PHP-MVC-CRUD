<?php

    require "./lib/Database/Connection.php";    
    require "./app/Core/Core.php";

    require "./app/Controller/HomeController.php";
    require "./app/Controller/ErroController.php";
    require "./app/Controller/PostController.php";
    require "./app/Controller/SobreController.php";
        
    require "./app/Model/Postagem.php";
    require "./app/Model/Comentarios.php";    
    
    require "vendor/autoload.php";    

    $template = file_get_contents('./app/Template/estrutura.html');

    ob_start();
        $core = new Core;
        $core->start($_GET);

        $saida = ob_get_contents();
    ob_end_clean();

    $tplPronto = str_replace('{{area_dinamica}}',$saida,$template);

    echo $tplPronto;

?>