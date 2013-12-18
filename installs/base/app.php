<?php
namespace Install;

class App{
    const C="categorie"; //Controleur par défaut
    const A="liste"; //Action par défaut
    const NAME='CenStock'; //Nom de l'application
    static $utilisateur=null; //Utilisateur par défault

    const BDD_TYPE = \MVC\BddType::MYSQL; //Type de la base de données (oracle||mysql)
    
    const SALT_BEFORE='sdfj 5(-q*/DA';
    const SALT_AFTER='rccà9_6}Hé';
}