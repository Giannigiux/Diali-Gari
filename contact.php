<?php include('top_contact.php'); ?>

    <body>
      <div id="page">
        <?php
        $destinataire = 'giannigiudice00@gmail.com';

        if (isset($_POST['envoyer']) && isset($_POST['courriel']) && isset($_POST['objet']) && isset($_POST['message']))
        {
          $courriel = $_POST['courriel'];
          $objet = $_POST['objet'];
          $message = $_POST['message'];
          if (!empty($courriel) && !empty($objet) && !empty($message))
          {
            if (filter_var($courriel, FILTER_VALIDATE_EMAIL))
            {
              $from = 'From: <' . $courriel . '> \nMime-Version:\n';
        	    $from .= ' 1.0\nContent-Type: text/html; charset=UTF-8\n';
              $message = nl2br($message);
              mail($destinataire, $objet, $message, $from);
              echo '
                <span class="success">Votre message a bien été envoyé, merci de votre intérêt.</span><br />
                Vous allez être redirigé vers l\'accueil..
                <meta http-equiv="refresh" content="5; URL=index.php">
              ';
            }
            else
            {
              echo '<span class="error">Adresse mail invalide.</span><br />
              Vous allez être redirigé vers l\'accueil..
              <meta http-equiv="refresh" content="5; URL=index.php">';
            }
          }
          else
          {
            echo '<span class="error">Vous devez remplir tous les champs.</span><br />
            Vous allez être redirigé vers l\'accueil..
            <meta http-equiv="refresh" content="5; URL=index.php">';
          }
        }
        else
        {
          echo '<meta http-equiv="refresh" content="0; URL=index.php">';
        }

        ?>
      </div>
    </body>
</html>
