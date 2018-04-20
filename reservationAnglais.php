<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"> <!--accent lisible par les navigateurs-->
    <link type="text/css" rel="stylesheet" href="style5.css" /> 
  
    <title>Reservation</title>
  </head>

  <body>
  <div class="modal">
    <div class="modal-header">
      <div class="modal-tab-bar"><a href="" class="modal-tab active">Reservation</a><a href="facture.html" class="modal-tab active">Bill</a> <a href="offre.html" class="modal-tab active">Offers</a><a href="historique.html" class="modal-tab active">Historical</a></div>
        <button class="modal-close"></button>
  </div>

  <!-- traduction-->
  <div id="langue">
   <a href="reservation.php"><img src="img/france.jpg" height="30" width="50"></a>
  </div>

  <div class="modal-content">
    <div class="modal-left">
      <div class="modal-content-title">Details</div>
      <form id="reservation" action="reserver.php" method="post">
      <table class="reservation-details">
        <tbody>
          <tr>
            <td> Customer Code : </td>
            <td><input name="codeClient" type="text"/></td>
          </tr>
          <tr>
            <td> Arrival date : </td>
            <td><input name="arrive" type="date"/></td>
          </tr>
          <tr>
            <td> Date of departure : </td>
            <td><input name="depart" type="date"/></td>
          </tr>
          <tr>
            <td> Arriving time : </td>
            <td><input name="harrive" type="time"/></td>
          </tr>
          <tr>
            <td> Number of adults : </td>
            <td><SELECT name="nbAdulte"> <OPTION>1 <OPTION>2 </SELECT></td>
          </tr>
          <tr>
            <td> Number of childrens (-18 years):</td>
            <td><SELECT name="nbEnfant" > <OPTION>0 <OPTION>1 <OPTION>2 </SELECT></td>
          </tr>
          <tr>
            <td> Nombre d'animaux :</td>
            <td><SELECT name="nbAnimaux" > <OPTION>0 <OPTION>1 <OPTION>2 </SELECT></td>
          </tr>
          <tr>
            <td> Promo Code :</td>
            <td> <input name="codePromo" type="text" size="20"/></td>
          </tr>
          <tr>
            <td> Payment choice :</td>
            <td> <Select name="modeReglement" /> <OPTION> <OPTION>Visa Card <OPTION>Mastercard <OPTION>Paypal </td>
          </tr>
           </div>
              </div>
        </tbody>
      </table>
    </div> <!-- .détails -->


    <div class="modal-right">
      <div class="modal-content-title">Bedrooms</div>
      <table class="table-details">
        <thead>
          <tr>
            <th>Number</th>
            <th>Type</th>
            <th> Name </th>
            <th>Room-Service</th>
            <th>Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><span>1A</span></td>
            <td>Simple</td>
            <td><SELECT name="CSimple"> <option>  <OPTION>Standard <OPTION>Comfort <OPTION>Classic </SELECT></td>
            <td><input type="radio" name="rs"/>Yes<input type="radio" name="rs"/>No</td>
            <td></td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><span>2B</span></td>
            <td>Twin</td>
            <td><SELECT name="CTwin"> <option> <OPTION>Standard <OPTION>Comfort <OPTION>Deluxe </SELECT></td>
            <td><input type="radio" name="rs1"/>Yes<input type="radio" name="rs1"/>No</td>
            <td></td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><span>2C</span></td>
            <td>Double</td>
            <td><SELECT name="CDouble"> <option> <OPTION>Standard <OPTION>Comfort <OPTION>Deluxe </SELECT></td>
            <td><input type="radio" name="rs2"/>Yes<input type="radio" name="rs2"/>No</td>
            <td></td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><span>4D</span></td>
            <td>Suite</td>
            <td><SELECT name="Suite"> <option> <OPTION>Deluxe <OPTION>Comfort <OPTION>Standard <OPTION>Presidential</SELECT></td>
            <td><input type="radio" name="rs3"/>Yes<input type="radio" name="rs3"/>No</td>
            <td></td>
            <td><button class="remove"></button></td>
          </tr>
        </tbody>
      </table>

  <div class="modal-content-title">Hobbies</div>
      <table class="table-details">
        <thead>
          <tr>
            <th>Name </th>
            <th>Date</th>
            <th>Time </th>
            <th>Description </th>
            <th>Price </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><SELECT name="loisirs"> <option> </option><OPTION>Voile <OPTION>VTT <OPTION>Walking <OPTION>Fitness <OPTION>Bodybuilding <OPTION>Yoga <OPTION>Swimming Pool <OPTION>Ping-Pong <OPTION>Basketball <OPTION>Football <OPTION>Tennis <OPTION>Volleyball <OPTION>Singing <OPTION>Theater <OPTION>Dance</SELECT></td>
            <td><input type="date"/></td>
            <td><input name="hloisir" type="time"/></td>
            <td>...</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><SELECT name="loisirs"> <option> </option><OPTION>Voile <OPTION>VTT <OPTION>Walking <OPTION>Fitness <OPTION>Bodybuilding <OPTION>Yoga <OPTION>Swimming Pool <OPTION>Ping-Pong <OPTION>Basketball <OPTION>Football <OPTION>Tennis <OPTION>Volleyball <OPTION>Singing <OPTION>Theater <OPTION>Dance</SELECT></td>
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
            <th>Time </th>
            <th>Description </th>
            <th>Price </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><SELECT name="salle"> <option> </option><OPTION>Conference <OPTION>Meeting <OPTION>Reunion <OPTION>Seminar <OPTION>Reception <OPTION>Party <OPTION>Wedding </SELECT></td>
            <td><input type="date"/></td>
            <td><input name="hsalle" type="time"/></td>
            <td>...</td>
            <td>...</td>
            <td><button class="remove"></button></td>
          </tr>
          <tr>
            <td><SELECT name="salle"> <option> </option><OPTION>Conference <OPTION>Meeting <OPTION>Reunion <OPTION>Seminar <OPTION>Reception <OPTION>Party <OPTION>Wedding </SELECT></td>
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
    <a href="accueil.php">  <input type="button" value="Déconnexion"></a>
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