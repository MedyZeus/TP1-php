<?php

class Utilitaire {
    public static function dateformatee($date){
        $date = new DateTime();
        return $date->format('Y-m-d');
    }

    public static function tauxVotesPositifs($votePostitifs, $voteNegatifs){
        return $votePostitifs / ($votePostitifs + $voteNegatifs);
    }
}