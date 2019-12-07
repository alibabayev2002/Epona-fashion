<?php
    namespace App;

    use App\Router;
    use App\Controllers\Home;

    $router = new Router;

    $router->set('epona',function(){
        Home::makeView('home');
    });
    // $router->set('epona/about',);
?>