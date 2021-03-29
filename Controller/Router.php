<?php 
class Router
{
    private $_ctrl;
    private $_view;

    public function routeReq() {
        try {
            // Chargement des classes automatiquement
            spl_autoload_register(function($class){
                require_once('models/'.$class.'.php');
            });

            $url = '';
        } catch (Exceptiob $e){

        }
    }
}