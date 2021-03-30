<?php

class application extends Model{
    private $_id_candidature;
    private $_cv_candidature;
    private $_motiv_candidature;
    private $_etape_candidature;
    private $_validation_candidature;
    private $_convention_candidature;
    private $_satut_candidature;
    private $_id_utilisateur;
    private $_id_offre;

    public function __construct($data) {
        $this->hydrate( $data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }

    public function id_candidature() {return $this->_id_candidature;}
    public function cv_candidature() {return $this->_cv_candidature;}
    public function motiv_candidature() {return $this->_motiv_candidature;}
    public function etape_candidature() {return $this->_etape_candidature;}
    public function validation_candidature() {return $this->_validation_candidature;}
    public function convention_candidature() {return $this->_convention_candidature;}
    public function satut_candidature() {return $this->_satut_candidature;}
    public function id_utilisateur() {return $this->_id_utilisateur;}
    public function id_offre() {return $this->_id_offre;}

    public function setId_candidature($id) {
        $id_candidature = (int) $id;
        if ($id_candidature > 0)
            $this->_id_candidature = $id_candidature;
    }

    public function setCv_candidature($cv) {
        if (is_string($cv) && strlen($cv) <= 30)
            $this->_cv_candidature = $cv;
    }
    
    public function setMotiv_candidature($motiv) {
        if (is_string($motiv) && strlen($motiv) <= 30)
            $this->_motiv_candidature = $motiv;
    }

    public function setEtape_candidature($etape) {
        if (is_string($etape) && strlen($etape) <= 20)
            $this->_etape_candidature = $etape;
    }

    public function setValidation_candidature($valid) {
        if (is_string($valid) && strlen($valid) <= 20)
            $this->validation_candidature = $valid;
    }

    public function setConvention_candidature($convention) {
        if (is_string($convention) && strlen($convention) <= 50)
            $this->_convention_candidature = $convention;
    }

    public function setId_utilisateur($id) {
        $this->_id_utilisateur = (int) $id;
    }

    public function setId_offre($id) {
        $this->_id_offre = (int) $id;
    }
}