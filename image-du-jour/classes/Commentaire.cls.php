<?php
class Commentaire extends AccesBd {
    private $idIdj;

    public function __construct($idIdj) {
        parent::__construct();
        $this->idIdj = $idIdj;
    }

    public function obtenirNombreAime(){
        $sql = "SELECT COUNT(com_aime) FROM commentaire c JOIN vote v ON c.com_id = v.vot_com_id_ce WHERE com_aime = 1 ";
        return $this->lireUn($sql);
    }

    public function toutSansVote(){
        $sql = "SELECT * FROM commentaire c JOIN image i ON i.img_id = c.com_img_id_ce WHERE com_texte != ''";
        return $this->lireTout($sql);
    }

    public function toutAvecVote(){
        $sql = "SELECT * FROM commentaire JOIN vote ON vot_com_id_ce = com_id";
        return $this->lireTout($sql);
    }
}