<?php include('top_contact.php'); ?>

    <body>
      <div id="page">
        <?php
        $destinataire = 'dialigari.asso@gmail.com';

        if (isset($_POST['envoyer']) && isset($_POST['courriel']) && isset($_POST['objet']) && isset($_POST['message']))
        {
          $courriel = $_POST['courriel'];
          $objet = $_POST['objet'];
          $message = $_POST['message'];
          if (!empty($courriel) && !empty($objet) && !empty($message))
          {
            if (filter_var($courriel, FILTER_VALIDATE_EMAIL))
            {
              if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $courriel))
              {
                $passage_ligne = "\r\n";
              }
              else
              {
                $passage_ligne = "\n";
              }
              $headers = "From: " . $courriel . $passage_ligne;
              $headers .= "Reply-to: " . $courriel . $passage_ligne;
              $headers .= "MIME-Version: 1.0" . $passage_ligne;
              $headers .= 'Content-type: text/html;' . "\r\n";
              //$headers .= "\r\nX-Mailer: PHP/".phpversion();

              $message = nl2br($message);
              mail($destinataire, $objet, $message, $headers);
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
