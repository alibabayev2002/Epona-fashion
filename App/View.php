<?php
namespace App;

class View {
    public function render($viewName,$title){
        ob_start();
        require './Views/'.$viewName.'.php';
        $content = ob_get_clean();
        require './Views/Layouts/default.php';
    }
}
?>