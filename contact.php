 <!-- Formulaire -->
 <div class="row">
              <h1>Contactez-Moi</h1>
              <form action="./contact_valide.php" method="post">
              <div class="col-6 my-2">
                <label for="firstname" class="form-label">Prénom</label>
                <input name="firstname" type="text" class="form-control" id="firstname">
              </div>
              <div class="col-6 my-2">
                <label for="name" class="form-label">Nom</label>
                <input name="name" type="text" class="form-control" id="name">
              </div>
              <div class="col-12 my-2">
                <label for="email" class="form-label">Email addresse</label>
                <input name="email" type="email" class="form-control" id="email">
              </div>
              <div class="col-12 my-2">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="col-12 my-2">
                <button type="submit" class="btn btn-primary w-100">Envoyer</button>
              </div>
            </form>

          </div>