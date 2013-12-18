<?php
namespace APPLI\C;

class Produit extends \MVC\Controleur{
    
    static function liste() 
    {
        $produits = \APPLI\M\Produit::getInstance()->getAll();
        self::getVue()->liste=$produits;
    }
    
    static function mouvement()
    {
        $mouvement = \APPLI\M\Produit::getInstance()->getAll();
        self::getVue()->mouvement=$mouvement;
    }
    
    static function statistique()
    {
        
    }
}
