<?php
$bdd = Database::getDB(); // On récupère la connexion à la BDD

class Post {

    // Injecte un nouveau message en BDD
    public function setPost($pseudo, $message)
    {
        $bdd = Database::getDB();
        $req = "INSERT INTO messages (pseudo, message, datenow) VALUES (:pseudo, :message, NOW() )";
        $sql = $bdd->prepare($req);
        $sql->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $sql->bindValue(':message', $message, PDO::PARAM_STR);
        $sql->execute();
        $sql->closeCursor(); // On libère la requête
    }

    // Récupère tous les messages
    public function getMessages()
    {
        $bdd = Database::getDB();
        $req = 'SELECT * FROM messages ORDER BY id DESC LIMIT 5'; // On affiche les 5 derniers messages
        $sql = $bdd->query($req);

        return $sql;
    }

}
