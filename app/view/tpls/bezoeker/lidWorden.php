<?php include 'includes/header.php';
include 'includes/menu.php';?>
    <section id='content'>
      <img src="img/image1.jpg" alt="Kickboksing">
      <img src="img/image2.jpg" alt="Kickboksing">
      <img src="img/image3.jpg" alt="Kickboksing">
      <div>
        <p>
          <h3>Lid worden</h3>
          Om gebruik te kunnen maken van de lessen moet je bij ons bekend zijn.
          Vul hieronder alle gegevens in en registreer jezelf.
        </p>
        <table>
          <tr>
            <td>Voornaam:</td>
            <td><input type="text" placeholder="vul uw naam in" name="firstname" required="required"></td>
          </tr>
          <tr>
            <td>Tussenvoegsel:</td>
            <td><input type="text" placeholder="vul uw tussenvoegsel in" name="preprovision"></td>
          </tr>
          <tr>
            <td>Achternaam:</td>
            <td><input type="text" placeholder="vul uw achternaam in" name="lastname" required="required"></td>
          </tr>
          <tr>
            <td>Geboortedatum:</td>
            <td><input type="text" placeholder="DD/MM/YYYY" name="" required="required"></td>
          </tr>
          <tr>
            <td>Gebruikersnaam:</td>
            <td><input type="text" placeholder="vul uw gebuikersnaam in" name="gn" required="required"></td>
          </tr>
          <tr>
            <td>Wachtwoord:</td>
            <td><input type="text" placeholder="vul uw wachtwoord in" name="ww" required="required"></td>
          </tr>
          <tr>
            <td>Herhaling wachtwoord:</td>
            <td><input type="text" placeholder="herhaal uw wachtwoord" name="ww" required="required"></td>
          </tr>
        </table>
        Het wachtwoord is nodig om in te loggen, moet minstens 6 tekens bevatten.
        <table>
          <tr>
            <td>Man/Vrouw:</td>
              <td>
                  <input type="radio" name="gender" value="male"> Male
                  <input type="radio" name="gender" value="female"> Female
              </td>
          </tr>
          <tr>
            <td>Straat:</td>
            <td><input type="text" placeholder="vul uw straat in" name="street"></td>
          </tr>
          <tr>
            <td>Postcode:</td>
            <td><input type="text" placeholder="vul uw postcode in" name="zipcode" required="required"></td>
          </tr>
          <tr>
            <td>Stad:</td>
            <td><input type="text" placeholder="vul uw woonplaats in" name="" required="required"></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" placeholder="vul uw email in" name="" required="required"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Registreer"></td>
          </tr>
        </table>
    </div>
    </section>

<?php include 'includes/footer.php';
