<?php
require_once "./classRandomTirage.php";
class Deck extends randomTirage {
    private $numColors;
    private $numValues;
    private $itemName;

    public function __construct($numColors, $numValues) {
        $this->numColors = $numColors;
        
        $this->numValues = $numValues;
        $this->itemName = "carte";
    }

    public function drawCardFromDeck() {
        $result = $this->roll($this->itemName);
        $outcome = $result->__toString();
        // var_dump($outcome);


        switch ($outcome) {
            case "Resultat tirage des cartes: SUCCESS":
                break;
            case "Resultat tirage des cartes: FAILURE":
                break;
            case "Resultat tirage des cartes: CRITICAL SUCCESS":
                break;
            case "Resultat tirage des cartes: FUMBLE":
                break;
            default:
                break;
        }
        return $outcome;

    }

    /**
     * Get the value of numValues
     */ 
    public function getNumValues()
    {
        return $this->numValues;
    }

    /**
     * Set the value of numValues
     *
     * @return  self
     */ 
    public function setNumValues($numValues)
    {
        $this->numValues = $numValues;

        return $this;
    }

    /**
     * Get the value of numColors
     */ 
    public function getNumColors()
    {
        return $this->numColors;
    }

    /**
     * Set the value of numColors
     *
     * @return  self
     */ 
    public function setNumColors($numColors)
    {
        $this->numColors = $numColors;

        return $this;
    }
}

