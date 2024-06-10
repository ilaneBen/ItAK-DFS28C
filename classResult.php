<?php
class Result {
    private $outcome;
    private $itemName;

    public function __construct($outcome, $itemName) {
        $this->outcome = $outcome;
        $this->itemName = $itemName;
    }

    public function __toString() {
        $outcomeStr = "";
        switch ($this->outcome) {
            case ResultatSortie::SUCCESS:
                $outcomeStr = "Resultat: SUCCESS";
                break;
            case ResultatSortie::FAILURE:
                $outcomeStr = "Resultat: FAILURE";
                break;
            case ResultatSortie::CRITICAL_SUCCESS:
                $outcomeStr = "Resultat: CRITICAL SUCCESS";
                break;
            case ResultatSortie::FUMBLE:
                $outcomeStr = "Resultat: FUMBLE";
                break;
            default:
                $outcomeStr = "Invalid outcome";
                break;
        }
        return $outcomeStr . " - Item: " . $this->itemName;
    }
}

?>
