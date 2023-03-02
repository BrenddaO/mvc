<?php
#para usar nos controllers
function view($view, $dados = '') {
    return require_once "App/View/index/$view.phtml";
}