<?php

class Movie{

    public $titleFilm = "";
    public $lenghtFilm ="";
    public $typeFilm = "";
    public $plotFilm = "";

    function __construct($_titleFilm, $_lenghtFilm, $_typeFilm, $_plotFilm){
        $this -> setTitleFilm($_titleFilm);
        $this -> setLenghtFilm($_lenghtFilm);
        $this -> setTypeFilm($_typeFilm);
        $this -> setPlotFilm($_plotFilm);
    }

    /********** FUNCTION SET **********/  

    public function setTitleFilm($newTitleFilm) {
        $this->titleFilm = $newTitleFilm;
    }

    public function setLenghtFilm($newLenghtFilm) {
        $this->lenghtFilm = $newLenghtFilm;
    }

    public function setTypeFilm($newTypeFilm) {
        $this->typeFilm = $newTypeFilm;
    }

    public function setPlotFilm($newPlotFilm) {
        $this->plotFilm = $newPlotFilm;
    
    }

    /********** FUNCTION GET **********/  

    public function getTitleFilm(){
        return $this -> titleFilm;
    }

    public function getTLenghtFilm(){
        return $this -> lenghtFilm;
    }

    public function getTypeFilm(){
        return $this -> typeFilm;
    }

    public function getPlotFilm(){
        return $this -> plotFilm;
    }
     

    public function getInfoFilm(){
        return "Titolo: " . $this -> getTitleFilm() . "<br> " . 
                "Durata: " . $this-> getTLenghtFilm() . "<br>" . 
                "Tipologia: " . $this -> getTypeFilm() . "<br>" . 
                "Trama: " . $this -> getPlotFilm();
    }


}


?>