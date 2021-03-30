<?php

class evaluation extends Model{
    private $_id_evaluation;
    private $_grade_evaluation;
    private $_comment_evaluation;
    private $_id_entreprise;
    private $_id_user;
    
    public function __construct($data) {
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    public function id_evaluation() {return $this->_id_evaluation;}
    public function grade_evaluation() {return $this->_grade_evaluation;}
    public function comment_evaluation() {return $this->_comment_evaluation;}
    public function id_entreprise() {return $this->_id_entreprise;}
    public function id_user() {return $this->_id_user;}

    public function setId_evaluation($id) {
        $id_evaluation = (int) $id;
        if ($id_evaluation > 0)
            $this->_id_evaluation = $id_evaluation;
    }

    public function setNote_evaluation($grade) {
        $grade_evaluation = (int) $grade;
        if($grade >= 0)
            $this->_grade_evaluation = $grade;
        
    }

    public function setCommentaire_evaluation($comment) {
        if (is_string($comment) && strlen($comment) <= 50)
            $this->_comment_evaluation = $comment;
    }

    public function setId_entreprise($id) {
        $this->_id_entreprise = (int) $id;
    }

    public function setId_utilisateur($id) {
        $this->_id_user = (int) $id;
    }

}


?>