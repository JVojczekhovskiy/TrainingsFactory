<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tranings Centrum 070</title>
        <link rel="STYLESHEET" href="css/framework.css" type="text/css">
    </head>
    <body>
        <header>
            <figure>
                <img src="img/logo.jpg" alt="Kickboksing">
            </figure>
            <div>
                <h1>Trainings Centrum Den Haag</h1>
            </div>
            <form action="index.php?action=inloggen" method="POST">
            <div class="login">
              <table>
                <tr>
                  <td>
                    <input type="text" autocomplete="off" placeholder="vul uw gebuikersnaam in" name="gn" value='<?= isset($gn)?$gn:"";?>' required="required">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="password" autocomplete="off" name="ww" placeholder="vul uw wachtwoord in" value='<?= isset($ww)?$ww:"";?>' required="required" >
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" value="inloggen"><input type="reset" value="reset">
                  </td>
                </tr>
            </table>
          </div>
          </form>
        </header>
        <section>
