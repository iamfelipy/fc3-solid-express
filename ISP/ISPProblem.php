<?php

interface Movie
{
    public function play();


    public function increaseVolume();
}

class TheLionKing implements Movie
{
    public function play()
    {
        // play the movie
    }
    public function increaseVolume()
    {
        // increasing volume
    }
}

class ModernTimes implements Movie
{

    public function play()
    {
        // play the movie
    }
    public function increaseVolume()
    {
        // esse metodo não será utilizado, porém terá de ser implementado
    }

}