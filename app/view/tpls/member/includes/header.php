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
            <p>Momenteel is ingelogd: <em><?=$gebruiker->getNaam();?></em></p> 
            <p>Je hebt de rechten van: <em><?=$gebruiker->getRecht();?></em></p>
          </div>
        </header>
        <section>