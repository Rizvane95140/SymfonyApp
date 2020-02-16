<?php 

namespace App\Entity;

class Arme{

    public $nom;
    public $carac = [];

    public static $armes = [];

    public function __construct($nom, $carac) {
        $this->nom = $nom;
        $this->carac = $carac;
        self::$armes[] = $this;

    }

    public static function creerArmes() {
        $a1 = new Arme("Arc", [
            "puissance" => 3,
            "durabilite" => 5,
        ]);
        $a2 = new Arme("Epee", [
            "puissance" => 4,
            "durabilite" => 4,
        ]);
        $a3 = new Arme("Hache", [
            "puissance" => 6,
            "durabilite" => 2,
        ]);
    }

    public static function getArmeParNom($nom){
        foreach(self::$armes as $arme){
            if (strtolower($arme->nom) === $nom){
                return $arme;
            }
        }
    }
}