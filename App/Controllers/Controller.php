<?php
namespace App\Controllers;

use App\View;

class Controller  {
    public function makeView($viewName){
        View::render($viewName,'E P O N A');
    }
}

?>