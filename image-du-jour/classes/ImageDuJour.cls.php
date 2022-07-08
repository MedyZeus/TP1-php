<?php
class ImageDuJour extends AccesBd {
    private $jour;

    public function __construct($jour) {
        parent::__construct();
        $this->jour = $jour;
    }

    public function unParDate($date){
        $sql = "SELECT img_fichier FROM image WHERE img_jour = $date";
        return $this->lireUn($sql);
    }

    public function datePremiereImage(){
        $sql = "SELECT img_fichier FROM image WHERE img_jour = '2022-06-01'";
        return $this->lireUn($sql);
    }
}