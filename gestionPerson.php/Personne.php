<?php
class Personne {
    public $id;
    public $nom;
    public $prenom;
    public $age;

    public function __construct($nom = "", $prenom = "", $age = 0) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
}
?>
