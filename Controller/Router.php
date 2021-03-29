<?php 
class Router
{
    private $_ctrl;
    private $_view;

    public function routeReq() {
        try {
            // Chargement des classes automatiquement
            spl_autoload_register(function($class){
                require_once('Model/'.$class.'.php');
            });

            $url = '';
            if(isset($_GET['url'])) // si il ya un param URL
            {
                $url = explode('/', filter_var($_GET['url'],
                FILTER_SANITIZE_URL)); //verifier se que sait
                $controller =ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFile ="Controller/".$controllerClass.".php";

                if(file_exists($controllerFile))
                {
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                }
                else
                {
                    throw new Exception('Page introuvable');
                }
            }
            else
            {
                require_once('Controller/controllerUser.php');
                $this->_crlt = new ControllerUser($url);
            }
        }
        catch(Exception $e) //GESTIONS DES ERREURS
        {
            echo " catch";
            /*$errorMsg = $e->getMessage();
            $this->_view = new Vew('Error');
            $this->_view->generate(array('errorMsg' =>$errorMsg));*/
        }
    }
}
?>