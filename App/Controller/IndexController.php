<?php

namespace App\Controller;
class IndexController {

   public function index(){
        $dados = array('sofa','cadeira','cama');
        return view('index', $dados);
    }

   public function sobreNos(){
    $dados = array('bala','casa','bano');
    return view('sobreNos', $dados);
   }


}
?>
