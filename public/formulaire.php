<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page contact</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<form action="thanks.php" method="post">
    <h1>Contactez-nous</h1>
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname">
    </div>
    <div>
        <label for="firstname">Prenom :</label>
        <input type="text" id="firstname" name="firstname">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input id="mail" name="mail">
    </div>
    <div>
        <label for="phonenumber">Téléphone :</label>
        <input type="tel" id="phonenumber" name="phone" >
    </div>
    <div>
        <label for="subject">Sujet de la demande:</label>
        <select name="subject" id="subject" size="1" >
            <option value="">Sujet de la demande</option>
            <option>Facture</option>
            <option>Contrat</option>
            <option>Réclamation</option>
            <option>Autre</option>
        </select>
    </div>
    <div>
        <label for="msg">Votre message :</label>
        <textarea id="msg" name="msg"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
</body>
</html>