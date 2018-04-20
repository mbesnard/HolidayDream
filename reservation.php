<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"> <!--accent lisible par les navigateurs-->
    <link type="text/css" rel="stylesheet" href="style5.css" /> 
  
    <title>Réservation</title>
  </head>

  <body>

  <div class="modal">
    <div class="modal-header">
      <div class="modal-tab-bar"><a href="" class="modal-tab active">Réservation</a><a href="facture.html" class="modal-tab active">Facture</a> <a href="offre.html" class="modal-tab active">Offres</a><a href="historique.html" class="modal-tab active">Historique</a></div>
        <button class="modal-close"></button>
  </div>

  <!-- traduction-->
  <div id="langue">
   <a href="reservationAnglais.php"><img src="img/anglais.png" height="30" width="50"></a>
  </div>

  <div class="modal-content">
    <div class="modal-left">
      <div class="modal-content-title">Détails</div>
      <form id="reservation" action="reserver.php" method="post">
      <table class="reservation-details">
        <tbody>
          <tr>
            <td> Code Client : </td>
            <td><input name="codeClient" type="text" required/></td>
          </tr>
          <tr>
            <td> Date d'arrivée : </td>
            <td><input name="arrive" type="date" required/></td>
          </tr>
          <tr>
            <td> Date de départ : </td>
            <td><input name="depart" type="date" required/></td>
          </tr>
          <tr>
            <td>Heure d'arrivée : </td>
            <td><input name="harrive" type="time"/></td>
          </tr>
          <tr>
            <td>Nombre d'adulte : </td>
            <td><SELECT name="nbAdulte"> <OPTION>1 <OPTION>2 </SELECT></td>
          </tr>
          <tr>
            <td> Nombre d'enfant (-18 ans):</td>
            <td><SELECT name="nbEnfant" > <OPTION>0 <OPTION>1 <OPTION>2 </SELECT></td>
          </tr>
          <tr>
            <td> Nombre d'animaux :</td>
            <td><SELECT name="nbAnimaux" > <OPTION>0 <OPTION>1 <OPTION>2 </SELECT></td>
          </tr>
          <tr>
            <td> Code Promo :</td>
            <td> <input name="codePromo" type="text" size="20"/></td>
          </tr>
          <tr>
            <td> Mode règlement :</td>
            <td> <Select name="modeReglement" /> <OPTION> <OPTION>Carte Visa <OPTION>Mastercard <OPTION>Paypal </td>
          </tr>
           </div>
              </div>
        </tbody>
      </table>
     
    </div> <!-- .détails -->


    <div class="modal-right">
      <div class="modal-content-title">Chambres</div>
      <table class="table-details">
        <thead>
          <tr>
            <th>Numéro</th>
            <th>Type</th>
            <th> Nom </th>
            <th>Room-Service</th>
            <th>Prix</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><span>1A</span></td>
            <td>Simple</td>
            <td><SELECT name="CSimple"> <option>  <OPTION>Standard <OPTION>Confort <OPTION>Classique </SELECT></td>
            <td><input type="radio" name="rs"/>oui <input type="radio" name="rs"/>non</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><span>2B</span></td>
            <td>Twin</td>
            <td><SELECT name="CTwin"> <option> <OPTION>Standard <OPTION>Confort <OPTION>Deluxe </SELECT></td>
            <td><input type="radio" name="rs1"/>oui <input type="radio" name="rs1"/>non</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><span>2C</span></td>
            <td>Double</td>
            <td><SELECT name="CDouble"> <option> <OPTION>Standard <OPTION>Confort <OPTION>Deluxe </SELECT></td>
            <td><input type="radio" name="rs2"/>oui <input type="radio" name="rs2"/>non</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><span>4D</span></td>
            <td>Suite</td>
            <td><SELECT name="Suite"> <option> <OPTION>Deluxe <OPTION>Confort <OPTION>Standard <OPTION>Présidentielle </SELECT></td>
            <td><input type="radio" name="rs3"/>oui <input type="radio" name="rs3"/>non</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
        </tbody>
      </table>

  <div class="modal-content-title">Loisirs</div>
      <table class="table-details">
        <thead>
          <tr>
            <th>Nom </th>
            <th>Date</th>
            <th>Durée </th>
            <th>Description </th>
            <th>Prix </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><SELECT name="loisirs"> <option> </option><OPTION>Voile <OPTION>VTT <OPTION>Marche <OPTION>Fitness <OPTION>Musculation <OPTION>Yoga <OPTION>Piscine <OPTION>Ping-Pong <OPTION>Basket <OPTION>Foot <OPTION>Tenis <OPTION>Voley <OPTION>Chant <OPTION>Théâtre <OPTION>Danse</SELECT></td>
            <td><input type="date"/></td>
            <td><input name="hloisir" type="time"/></td>
            <td>...</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><SELECT name="loisirs"> <option> </option><OPTION>Voile <OPTION>VTT <OPTION>Marche <OPTION>Fitness <OPTION>Musculation <OPTION>Yoga <OPTION>Piscine <OPTION>Ping-Pong <OPTION>Basket <OPTION>Foot <OPTION>Tenis <OPTION>Voley <OPTION>Chant <OPTION>Théâtre <OPTION>Danse</SELECT></td>
             <td><input type="date"/></td>
            <td><input name="hloisir" type="time"/></td>
            <td>...</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
        </tbody>
      </table>

      <div class="modal-content-title">Salles</div>
      <table class="table-details">
        <thead>
          <tr>
            <th>Type </th>
            <th>Date </th>
            <th>Durée </th>
            <th>Description </th>
            <th>Prix </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><SELECT name="salle"> <option> </option><OPTION>Conférence <OPTION>Meeting <OPTION>Réunion <OPTION>Séminaire <OPTION>Réception <OPTION>Fête <OPTION>Mariage </SELECT></td>
            <td><input type="date"/></td>
            <td><input name="hsalle" type="time"/></td>
            <td>...</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><SELECT name="salle"> <option> </option><OPTION>Conférence <OPTION>Meeting <OPTION>Réunion <OPTION>Séminaire <OPTION>Réception <OPTION>Fête <OPTION>Mariage </SELECT></td>
            <td><input type="date"/></td>
            <td><input name="hsalle" type="time"/></td>
            <td>...</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
        </tbody>
      </table>

    </div> <!-- .modal-right -->
  </div> <!-- .modal-content -->
  <div class="modal-footer">
  <br> 

    <input type="submit" name="Reserver" value="Réserver">
    <a href="accueil.php" ><input type="button" value="Déconnexion"></a>
     </form>
   <img class="modal-footer" id="icone-paiement" src="img/icone-paiement.gif" width="150" height="60" />
    <br>
    <br>
    <br>
  </div>

  <div> 
    
  </div>

  </div> <!-- .modal -->

  </body>

</html>