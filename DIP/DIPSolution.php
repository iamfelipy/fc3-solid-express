<?php

interface Category
{

}

class DramaCategory implements Category
{

}
class XCategory implements Category
{

}
class Movie
{

    public function __construct($name, Category $category)
    {
        $this->name= $name;
        $this->category= $category;
    }

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
        return $this->category;
    }


    public function setCategory(DramaCategory $category)
    {
        $this->category= $category;
    }
}