<?php
if(!isset($_COOKIE['vote']) || empty($_COOKIE['vote']))
setcookie('vote','N',time()+120,null,null,false,true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Évaluation cours PHP</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cyborg/bootstrap.css">
</head>
<body>
<h2 style="text-align: center">Évaluez le contenu du cours PHP pour le moment</h2>
<form action="resulat.php" method="post">

    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="1" value="Bon" checked>
        <label class="form-check-label" for="1">
            Bon
        </label>
    </div>
    <br>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="2" value="Moyen">
        <label class="form-check-label" for="2">
            Moyen
        </label>
    </div>
    <br>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="3" value="Mauvais">
        <label class="form-check-label" for="3">
            Mauvais
        </label>
    </div>
    <br>
    <div class="form-check">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

<script src="js1.js"></script>
</body>
</html>
