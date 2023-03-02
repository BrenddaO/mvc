<?php

namespace App\Controller;
class IndexController {

    public function index(){
        return view('index');
    }

   public function sobreNos(){
        return view('sobreNos');
   }
}
?>