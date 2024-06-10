<?php
require_once "./classRandomTirage.php";
class Dice extends RandomTirage {
    private $numFaces;
    private $itemName;

    public function __construct($numFaces) {
        $this->numFaces = $numFaces;
        $this->itemName = "dé";
    }

    public function rollDie() {
        $result = $this->roll($this->itemName);
        $outcome = $result->__toString();
        // var_dump($outcome);

        switch ($outcome) {
            case "Resultat tirage des dés : SUCCESS":
                break;
            case "Resultat tirage des dés: FAILURE":
                break;
            case "Resultat tirage des dés: CRITICAL SUCCESS":
                break;
            case "Resultat tirage des dés: FUMBLE":
                break;
            default:
                break;
        }
        return $outcome;
    }
    
    /**
     * Get the value of numFaces
     */ 
    public function getNumFaces()
    {
        return $this->numFaces;
    }

    /**
     * Set the value of numFaces
     *
     * @return  self
     */ 
    public function setNumFaces($numFaces)
    {
        $this->numFaces = $numFaces;

        return $this;
    }
}