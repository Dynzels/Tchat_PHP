<?php

// On définit le titre de notre page
$title = 'Tchat PHP - Accueil';
// On démarre l'enregistrement à renvoyer au template
ob_start();
?>
<!-- HEADER -->
<header>
    <h1>Tchat PHP</h1>
    <p>Tchat créé dans un but pédagogique en utilisant la structure MVC et avec les technologies HTML/CSS, PHP et SQL.</p>
</header>
<!-- CONTENU PRINCIPAL -->
<main>
    <!-- Affichage des messages -->
    <div class="messages_list">
        <?php

            // On boucle sur les données renvoyées par la BDD (que le FrontController à envoyé)
            while ($donnees = $req->fetch())
            {
                // On stocke ces données dans un tableau
                $tableau[] = $donnees;
            }

            $tableau2 = array_reverse($tableau); // On inverse les index des tableaux (ainsi on a les plus récents en 1ère position)

            // Puis on boucle sur le tableau pour afficher les messages
            foreach ($tableau2 as $value) {
                echo "<p><strong>{$value['pseudo']}</strong> [{$value['datenow']}] : {$value['message']}</p>";
            }

            $req->closeCursor(); // On termine en libérant la requête
        ?>
    </div>
    <!-- Formulaire pour soumettre un nouveau message -->
    <form class="form" action="index.php?action=post" method="post">
        <label for="pseudo">Pseudo :
            <input type="text" name="pseudo" placeholder="Pseudo" value="<?= !empty($_SESSION['pseudo']) ? $_SESSION['pseudo'] : ''; ?>">
        </label>
        <label for="message">Message :
            <input type="text" name="message" placeholder="Votre message..." autofocus> <!-- autofocus = remet le curseur automatiquement dans ce champs au rechargement de la page -->
        </label>
        <input type="submit" name="submit" value="Envoyer">
    </form>
</main>
<?php
// On récupère l'enregistrement
$content = ob_get_clean();

// On appelle ensuite le "template" dans lequel le contenu va s'afficher
require('template.php');
