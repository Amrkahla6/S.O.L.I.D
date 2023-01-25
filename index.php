<?php

use SOLID\SRP\Bus;
use SOLID\SRP\Driver;
use SOLID\SRP\Route;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$amr     = new Driver('Amr Kahla',30,"SA7a","Mansoura");
$route80 = new Route('Cairo','Mansoura',220);
$route90 = new Route('Aswan','Alexsandrea',1500);

$bus = new Bus(201);
$bus->setColor("red");
$bus->setDoors(3);
$bus->setMaxNumberSpeed(144);
$bus->setNumberOfPassenger(50);
$bus->setDrivers($amr);
$bus->addRoute($route80);
$bus->addRoute($route90);
echo $bus->move();
dd($bus);


function dd($data){
    highlight_string("<?php\n " . var_export($data, true) . "?>");
    echo '<script>document.getElementsByTagName("code")[0].getElementsByTagName("span")[1].remove() ;document.getElementsByTagName("code")[0].getElementsByTagName("span")[document.getElementsByTagName("code")[0].getElementsByTagName("span").length - 1].remove() ; </script>';
    die();
}
