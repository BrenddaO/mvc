<?php

namespace App;

use MF\Init\Bootstrap;
#bootstrap está no vendor
class Route extends Bootstrap {

    protected function iniRoutes(){

        $routes['home'] =
            ['route'=>'/', 
            'controller'=> 'IndexController',
            'action' => 'index'];
        $routes['sobre_nos'] =
            [ 'route' => '/sobre_nos',
              'controller' => 'indexController',
             'action' => 'sobreNos'
            ];

            $this->setRoutes($routes);
    }

}
?>