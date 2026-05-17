<?php

class Video
{
    private $type;

    public function calculaInteresse()
    {

        if ($this->type == "Movie"){
            // calcula interesse baseado em filme
        } elseif ($this->type == "TVShow") {
            // calcula interesse baseado em serie
        }
    }
}