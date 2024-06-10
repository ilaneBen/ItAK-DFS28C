<?php
abstract class randomTirage {
    private $probabilities = [
        ResultatSortie::SUCCESS => 25,
        ResultatSortie::FAILURE => 25,
        ResultatSortie::CRITICAL_SUCCESS => 25,
        ResultatSortie::FUMBLE => 25
    ];

    protected function roll($itemName) {
        $rand = mt_rand(1, 100);
        $cumulative = 0;

        foreach ($this->probabilities as $outcome => $probability) {
            $cumulative += $probability;
            if ($rand <= $cumulative) {
                return new Result($outcome, $itemName);
            }
        }

        return new Result(ResultatSortie::FAILURE, $itemName); 
    }
}