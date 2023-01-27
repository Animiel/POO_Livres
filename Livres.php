<?php
class Livre {
    protected string $titre;
    protected int $date;
    protected int $pages;
    protected int $prix;
    protected Auteur $auteur;

    public function __construct(string $titre, int $date, int $pages, int $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->date = $date;
        $this->pages = $pages;
        $this->prix = $prix;
        $this->auteur = $auteur;                /*Attribution valeur à auteur ! */
        $this->auteur->ajouterLivre($this);     /*ATTENTION : pas de nouvelle attribution à auteur mais utilisation de ajouterLivre sur auteur ! */
    }

    
    public function getTitre() {
        return $this->titre;
    }
    
    public function setTitre(string $titre) {
        $this->titre = $titre;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function setDate(int $date) {
        $this->date = $date;
    }
    
    public function getPages() {
        return $this->pages;
    }
    
    public function setPages(int $pages) {
        $this->pages = $pages;
    }
    
    public function getPrix() {
        return $this->prix;
    }
    
    public function setPrix(int $prix) {
        $this->prix = $prix;
    }
    
    public function __toString() {
        return "$this->titre ($this->date) : $this->pages pages / $this->prix €";
    }    
}
?>