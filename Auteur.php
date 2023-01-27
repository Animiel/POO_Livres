<?php
class Auteur {
    protected string $nom;
    protected string $prenom;
    protected array $bibliographie;

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->bibliographie = [];
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }
    
    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }
    
    public function ajouterLivre(Livre $livre) {
        $this->bibliographie[] = $livre;
    }
    
    public function afficherBibliographie() {
        echo "Livres de $this :<br><br>";
        foreach ($this->bibliographie as $livre) {
            echo $livre."<br>";
        }
        return;
    }
    /*?????? créer un foreach Livres Si $nom $prenom = Auteur alors stock Livres dans array (ou supprimer de l'array ? puisque foreach est déjà pour array), sinon passe.
    Ensuite créer un triage par date décroissante.
    Conclusion affichage liste livres par auteur. ??????*/

    public function __toString() {
        return "$this->prenom $this->nom";
    }
}
?>