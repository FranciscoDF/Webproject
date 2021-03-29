<?php
class ArticleManager extends Model
{
    public function getArticles()
    {
        return $this->getAll('article','Article'); //('NomTable','objet')
    }
}


?>