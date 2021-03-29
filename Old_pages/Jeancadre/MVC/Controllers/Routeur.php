<?php
require_once('Views/View.php');

class Router
{
    private $_crlt; // controleur
    private $_view;

    public function routeReq() //requête du routeur 
    {
        try
        {
            //chargement auto des classes
            spl_autoload_register(function($class){ //sert utiliser le bon .php avec le nom de l'instance de classe que nous avons besoin
                require_once('Models/'.$class.'.php'); // fichier Models .$class. est le paramètre et .php le type de fichier qu'il doit recherche
            });

            $url ='';

           //LE CONTROLLEUR EST INCLUS SELON L'ACTION DE L'UTILISATEUR
            if(isset($_GET['url'])) // si il ya un param URL
            {
                $url = explode('/', filter_var($_GET['url'],
                FILTER_SANITIZE_URL)); // filtre qui permet de 
                $controller =ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFile ="Controllers/".$controllerClass.".php";

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
                require_once('Controllers/controllerAccueil.php');
                $this->_crlt = new ControllerAccueil($url);
            }
        }
        catch(Exception $e) //GESTIONS DES ERREURS
        {
            $errorMsg = $e->getMessage();
            $this->_view = new Vew('Error');
            $this->_view->generate(array('errorMsg' =>$errorMsg));
        }
    }
}
?>