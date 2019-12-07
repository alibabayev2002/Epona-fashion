<?php
    namespace App;

    class Router{
        public $routes = [];
        public $view;
        public function __construct(){
            
        }

        public function set($url,$function){
            $this->routes[] = $url;
            $uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
            if($uri == $url){
                $function->__invoke();
            }
        }

        // public function match() {
            
        //     foreach ($this->routes as $route) {
        //         if (preg_match($route, $url, $matches)) {
        //             return true;
        //         }
        //     }
        //     return false;
        // }

        // public function run(){
        //     if($this->match()){
        //         ob_start();
        //         require './Views/'.$this->view.'.php';
        //         $content = ob_get_clean();
        //         require './Views/Layouts/default.php';
        //     }else{
        //         ob_start();
        //         require './Views/error/404.php';
        //         $content = ob_get_clean();
        //         require './Views/Layouts/default.php';
        //     }
        // }
    }
?>