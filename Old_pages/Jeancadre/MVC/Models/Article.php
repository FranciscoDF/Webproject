<?php
class Article
{
    private $_id;
    private $_title;
    private $_content;
    private $_date;

    //Constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    //hydration voir à quoi cela sert
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key); // je sais pas c'est ucfirst ??
            if(method_existe($this, $metod))
                $this->$method($value);
        }
    }

    //SETTERS
    public function setId($id)
    {
        $id = (int) $id;
        if($id > 0)
        $this->_id=$id;
    }
    public function setTitle($title)
    {
        if(is_string($title))
            $this->_title = $title;
    }
    public function setContent($content)
    {
        if(is_string($content))
            $this->_content = $content;

    }
    public function setDate($date)
    {
        $this->_date = $date;
    }
    // GETTERS
    public function id()
    {
        return $this->_id;
    }
    public function title()
    {
        return $this->_title;
    }
    public function content()
    {
        return $this->_content;
    }
    public function date()
    {
        return $this->_date;
    }
}