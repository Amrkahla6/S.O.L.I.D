<?php

use SOLID\OCP\Car;
use SOLID\OCP\Bus;
use SOLID\OCP\Driver;
use SOLID\OCP\Route;
use SOLID\OCP\Trip;
use SOLID\OCP\Plane;
use SOLID\OCP\Ship;
use SOLID\OCP\MoveOnTheRoads;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$amr     = new Driver('Amr Kahla',30,"SA7a","Mansoura");
$route80 = new Route('Cairo','Mansoura',220);
$route90 = new Route('Aswan','Alexsandrea',1500);

$bus = new Bus(150);
$bus->setColor("red");
//$bus->setDoors(3);
$bus->setMaxNumberSpeed(144);
//$bus->setNumberOfPassenger(50);
$bus->setDrivers($amr);
$bus->addRoute($route80);
$bus->addRoute($route90);
$bus->setMovable(new MoveOnTheRoads());

$trip = new Trip($bus,'fs5w6q',44.22,30);
dd($trip);
echo $trip->move();


function dd($data){
    highlight_string("<?php\n " . var_export($data, true) . "?>");
    echo '<script>document.getElementsByTagName("code")[0].getElementsByTagName("span")[1].remove() ;document.getElementsByTagName("code")[0].getElementsByTagName("span")[document.getElementsByTagName("code")[0].getElementsByTagName("span").length - 1].remove() ; </script>';
    die();
}
