<?php

namespace App\Controllers;
use App\Models\ExampleModel;

class HomeController {
    public function index(){
        /* $model = new ExampleModel;
        $data = $model->getData();
        // $data = "Hello from Controller";
        include('views/home.php'); */
         echo "page a propos de nous";
    }

    public function about(){
        echo "page a propos de nous";
    }

}
?>