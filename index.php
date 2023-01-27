<?php

use SOLID\LSP\Rectangle;
use SOLID\LSP\Square;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

    $rectangle = new Rectangle();
    $rectangle->setWidth(3);
    $rectangle->setHeight(4);
    echo $rectangle->calculateArea();

    function f(Rectangle $rec){
        if($rec instanceof Square){
            if($rec->calculateArea() != 16){
                echo 'This some this error';
            }
        }else{
            if($rec->calculateArea() != 12){
                echo 'This some this error';
            }
        }

    }

     f($rectangle);

    function dd($data){
        highlight_string("<?php\n " . var_export($data, true) . "?>");
        echo '<script>document.getElementsByTagName("code")[0].getElementsByTagName("span")[1].remove() ;document.getElementsByTagName("code")[0].getElementsByTagName("span")[document.getElementsByTagName("code")[0].getElementsByTagName("span").length - 1].remove() ; </script>';
        die();
    }
