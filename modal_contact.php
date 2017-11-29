<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Formulaire de Contact</h4>
          </div>

          <div class="modal-body">
              <form action="contact.php" method="post">
                  <div>
                      <label for="courriel">Adresse mail </label>
                      <input type="email" id="courriel" name="courriel" />
                  </div>

                  <div>
                      <label for="objet">Objet </label>
                      <input type="text" id="objet" name="objet" />
                  </div>

                  <div>
                      <label for="message">Message </label>
                      <textarea id="message" name="message"></textarea>
                  </div>

                  <div class="button">
                      <button type="submit" name="envoyer">Envoyer votre message</button>
                  </div>
              </form>
          </div>
      </div>

    </div>
</div>
