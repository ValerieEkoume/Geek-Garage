<?php require '../vendor/autoload.php';

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;
use App\Connection;

$pdo = (new Connection())->getPdo();
$router = new AltoRouter();

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

$router->map('GET|POST', '/home', function () {
    require __DIR__ . '/../views/home.php';
});

$router->map('GET|POST', '/login', function () {
    require __DIR__ . '/../views/login.php';
});

$router->map('GET|POST', '/geek', function () {
    require __DIR__ . '/../views/espace_admin.php';
});

$router->map('GET|POST', '/read', function () {
    require __DIR__ . '/../crud/read.php';
});

$router->map('GET|POST', '/ajouter', function () {
    require __DIR__ . '/../crud/create.php';
});

$router->map('GET|POST', '/update', function () {
    require __DIR__ . '/../crud/update.php';
});

$router->map('GET|POST', '/delete', function () {
    require __DIR__ . '/../crud/delete.php';
});



$match=$router->match();

if( is_array($match) && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
// no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

