<form action="index.php?page=contact" method="post">
  <fieldset>
    <legend>Pour Me Contacter</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"  />
  </div>
  <div>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" />
  </div>
  <div>
    <label for="mail">E-mail :</label>
    <input type="email" name="mail" id="mail"  />
  </div>
  <div>
    <label for="tel">Téléphone :</label>
    <input type="tel" name="tel" id="tel" />
  </div>
  <div>
    <label for="message">Message :</label>
    <textarea name="message" id="message"></textarea>
  </div>
  <div>
    <input type="submit" value="Valider" />
  </div>
  </fieldset>
  <input type="hidden" name="frmContact" />
</form>
<img src="./assets/image/giphy.gif"/>
