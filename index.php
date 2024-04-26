<?php
use test\TestController;

require_once 'apartment/ApartmentController.php';
require_once 'Reservation/ReservationController.php';
require_once 'users/UsersController.php';

header("Content-Type: application/json; charset=utf8");
header("Access-Control-Allow-Origin: *");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );


switch ($uri[2]) {
    case 'test':
        $userController = new TestController();
        $id = null;
        if (isset($uri[3])) {
            $id = $uri[3];
        }
        $userController->routes($id);
        break;
    default:
        // Page non trouvée
        http_response_code(404);
        echo "Page not found";
        echo $uri;
        break;
}
