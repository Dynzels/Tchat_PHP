<?php

class Database {
    // Propriété "privée" qui contient la connexion à la BDD
    private static $bdd;

    // Fonction pour récupérer la connexion à la BDD
    public static function getDB()
    {
        // Si la propriété $bdd n'est pas définit
        if(!self::$bdd)
        {
            self::$bdd = new PDO('mysql:host=localhost; dbname=tchat_php; charset=utf8', 'root', 'root');
        }

        // On return la connexion
        return self::$bdd;
    }
}
