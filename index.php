<?php include('top.php'); ?>

    <body>
      <?php include('nav.php'); ?>

        <div class="jumbotron text-center">
            <img src="pictures/favicon.png" alt="logo" />
            <h1>Diali Gari</h1>
            <button type="button" class="btn btn-primary active" data-toggle="modal" data-target="#myModal">Nous Contacter</button>
            <?php include('modal_contact.php'); ?>
        </div>

        <div class="container-fluid text-center">
            <?php
            include('presentation.php');
            include('psychomotricite.php');
            include('actions.php');
            include('missions.php');
            include('senegal.php');
            ?>
        </div>

        <footer class="container-fluid text-center">
            <p>Association humanitaire - 2017</p>
        </footer>

    </body>
</html>
