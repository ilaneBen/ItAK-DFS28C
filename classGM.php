<?php
require_once "./classRandomTirage.php";


class GameMaster extends randomTirage {

    private $probabilities = [
        ResultatSortie::SUCCESS => 40,
        ResultatSortie::CRITICAL_SUCCESS => 15,
        ResultatSortie::FAILURE => 40,
        ResultatSortie::FUMBLE => 5
    ];

    private $gm;
    private $dice;
    private $deck;
    private $coin;



    public function __construct($dice, $deck, $coin) {
        $this->dice = $dice;
        $this->deck = $deck;
        $this->coin = $coin;
        // var_dump($dice, $deck, $coin);
    }

    public function pleaseGiveMeACrit() {
        $compteur = 15;
        $tirages = []; // Tableau pour stocker les résultats des tirages
    
        while ($compteur > 0) {
            // Choix aléatoire entre dé, deck de cartes ou pièce
            $randomItem = $this->randomItem(); // Choisissez un nombre entre 1 et 6
            
            switch ($randomItem) {
                case 1:
                case 2:
                case 3:
                    // Tirage à partir d'un dé
                    $item = $this->dice[array_rand($this->dice)];
                    break;
                case 4:
                case 5:
                    // Tirage à partir d'un deck de cartes
                    $item = $this->deck[array_rand($this->deck)];
                    break;
                case 6:
                    // Tirage à partir d'une pièce
                    $item = $this->coin[array_rand($this->coin)];
                    break;
                default:
                    // En cas d'erreur ou de cas inattendu
                    return ResultatSortie::FAILURE;
            }
    
            // Effectuer le tirage
            $result = $this->performRoll($item);
            $tirages[] = $result; // Stocker le résultat du tirage
    
            // Vérifier le résultat et déterminer si nous avons réussi
            if ($result == ResultatSortie::SUCCESS) {
                // Afficher tous les tirages
                foreach ($tirages as $tirage) {
                    echo $tirage . "\n";
                }
                return $result;
            }
    
            // Décrémenter le compteur
            $compteur--;
        }
    
        // Si toutes les tentatives échouent, afficher tous les tirages
        foreach ($tirages as $tirage) {
            echo "<div class='tirage'> $tirage</div>";
        }
    
        // Renvoyer un échec
        return ResultatSortie::FAILURE;
    }
    
    private function randomItem() {
        return mt_rand(1, 6); // Choisissez un nombre entre 1 et 6
    }
    
    private function performRoll($item) {
        if ($item instanceof Dice) {
            $item->setNumFaces($this->randomItem());
            $result = $item->rollDie($this->randomItem());
        } elseif ($item instanceof Deck) {
            $result = $item->drawCardFromDeck($this->randomItem());
        } elseif ($item instanceof Coin) {
            $result = $item->tossCoin($this->randomItem());
        } else {
            // En cas d'erreur ou de cas inattendu
            return ResultatSortie::FAILURE;
        }
    
        return $result;
    }
    
}
