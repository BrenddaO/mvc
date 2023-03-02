<?php
#para usar nos controllers
function view($view) {
    return require_once "App/View/index/$view.phtml";
}