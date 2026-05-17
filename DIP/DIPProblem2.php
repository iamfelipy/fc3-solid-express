<?php

use DramaCategory as GlobalDramaCategory;

class DramaCategory
{

}

class Movie
{

    private $name;
    private $category;


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name= $name;
    }


    public function getCategory()
    {
        return new GlobalDramaCategory();
    }

}