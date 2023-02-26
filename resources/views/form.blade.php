<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice</title>
</head>
<body>
    <form action="/afficher" method="post">
        {{csrf_field()}}
        <h1>Formulaire d'inscription des etudient</h1><br>
        <p>Remplissez Soigneusement le formulaire d'inscriprion </p><br>
        <fieldset> <legend>Complet name</legend>
        <label>Prénom</label><br>
        <input type="text" name="prenom"/><br>
        <label> Nom</label><br> <input type="text" name="nom"/>
    </fieldset>
    <label for="sexe">sexe</label>
    <select name="sexe" >
        <option value="femme">femme</option>
        <option value="homme">homme</option>
    </select><br>
    <label >E-mail</label>
    <input type="text" name="email"><br>
    <input type="submit" value="Soumettre l'inscription">
    </form>
    <div>
        Votre prenom :{{$prenom}}<br>
        Votre nom :{{$nom}}<br>
        Votre sexe :{{$sexe}}<br>
        Votre email :{{$email}}
    </div>
</body>
</html
