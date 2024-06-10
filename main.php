<?php

require_once "./classCoin.php";
require_once "./classDeck.php";
require_once "./classDice.php";
require_once "./classGM.php";
require_once "./classRandomTirage.php";
require_once "./classResult.php";
require_once "./classResultatSortie.php";
           
function main(){
        
            $dice = [ new Dice(6),
            new Dice(10),
            new Dice(20)  ];
      
            $deck=[
                new Deck(3, 18),
                new Deck(4, 13)
            ];     

            $coin=[
                new Coin(2),
                new Coin(3)
            ];
            $gm = new GameMaster($dice, $deck, $coin);
    return $gm;
        }
