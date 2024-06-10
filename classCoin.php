<?php
require_once "./classRandomTirage.php";
require_once "./classResult.php";
class Coin extends randomTirage {
    private $numTosses;
    private $itemName;
    
    public function __construct($numTosses) {
        $this->numTosses = $numTosses;
        $this->itemName = "pièce";
    }

    public function tossCoin() {
        $result = $this->roll($this->itemName);
        $outcome = $result->__toString();

        switch ($outcome) {
            case "Resultat tirage des pièces: SUCCESS":
                break;
            case "Resultat tirage des pièces: FAILURE":
                break;
            case "Resultat tirage des pièces: CRITICAL SUCCESS":
                break;
            case "Resultat tirage des pièces: FUMBLE":
                break;
            default:
                break;
        }
        return $outcome;

    }

    /**
     * Get the value of numTosses
     */ 
    public function getNumTosses()
    {
        return $this->numTosses;
    }

    /**
     * Set the value of numTosses
     *
     * @return  self
     */ 
    public function setNumTosses($numTosses)
    {
        $this->numTosses = $numTosses;

        return $this;
    }
}