<?php
class Views{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'Views/view'.$action.'.php';
    }

    // GENERE ET AFFICHE LA VIEW
    public function generate($data)
    {   
        //PARTIE MAIN DE LA VUE 
        $content = $this->generateFile($this->_file, $data);
        // TEMPLATE (HEADER+FOOTER)
        $view = $this->generateFile('views/template.php', array('t'=> $this->_t,'content' => $content));

        echo $view;
    }
    // GENERE UN FICHIER VUE ET RENVOIE LE RESUTLAT PRODUIT
    private function generateFile($file, $data)
    {
        if(file_existe($file))
        {
            extract($data);

            ob_start(); // Mise en tempon
            
            // INCLURE LE FICHIER VUE
            require $file;
            
            return ob_get_clean();
        }
        else
            throw new Exception('Fichier'.$file.'introuvable');

    }
}