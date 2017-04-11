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
            <div style="float: right;">
            <input type="text" autocomplete="off" placeholder="vul uw gebuikersnaam in" name="gn" value='<?= isset($gn)?$gn:"";?>' required="required">
            <input type="password" autocomplete="off" name="ww" placeholder="vul uw wachtwoord in" required="required" >
            <input type="submit" value="inloggen"><input type="reset" value="reset">
          </div>
        </header>
        <section>
