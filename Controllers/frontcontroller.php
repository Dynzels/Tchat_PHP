<?php
/*
    Selon la valeur du $_GET['action'], diverses actions possibles...
*/

// Routeur qui appelle le bon model +  la bonne vue selon l'action de l'utilisateur
if (isset($_GET['action'])) // Si $_GET['action'] est définit
{

    // Si action=post
    if ($_GET['action'] === 'post')
    {
        // Si le PSEUDO et MESSAGE ne sont pas vides
        if (!empty($_POST['pseudo']) && !empty($_POST['message']))
        {
            // On stocke en session le pseudo de l'utilisateur
            $_SESSION['pseudo'] = $_POST['pseudo'];

            $pseudo = $_POST['pseudo'];
            $message = $_POST['message'];

            $post = new Post(); // On instancie la class Post()
            $post->setPost($pseudo, $message); // Puis on injecte en BDD les données du formulaire avec la fonction setost contenue dans la class Post()

        }

        // On termine par rediriger l'utilisateur vers l'accueil
        header('location:index.php'); // La redirection se fait sans argument à "action"
    }
}
else // Si $_GET['action'] n'est pas définit (on charge par défaut la page d'accueil)
{
    $post = new Post(); // On instancie la class Post()
    $req = $post->getMessages();

    // On appelle ensuite la vue à afficher
    require('Views/accueil.php');
}
