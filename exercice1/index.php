<?php
include_once 'tete.php';
?>

<h1 style="text-align:center ">Livraison Sandwichs</h1>
<div class="container">
    <form action="recap.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" name="Nom" class="form-control" id="Nom" placeholder="Nom" required>
        </div>
        <br>
        <div class="form-group">
            <label for="Prenom">Prenom</label>
            <input type="text" name="Prenom"  class="form-control" id="Prenom" placeholder="Prenom" required>
        </div>
        <br>
        <div class="form-group">
            <label for="CIN">CIN:</label>
            <input type="file" class="form-control" name="CIN" id="CIN" required>
        </div>
        <br>
        <div class="form-group">
            <label for="Adresse">Adresse:</label>
            <textarea class="form-control" name="Adresse" id="Adresse" rows="2" placeholder="Adresse" required></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="nombresandwich">Nombre de Sandwich:</label>
            <input type="number" name="nombresandwich"  class="form-control" id="nombresandwich" min="1" placeholder="0" required>
        </div>
        <br>
        <div class="form-group">
            <label for="Type">Type:</label>
            <select class="form-control" name="Type" id="Type" required>
                <option selected value="">Choose...</option>
                <option value="Viande">Viande</option>
                <option value="Poulet">Poulet</option>
                <option value="Escalope">Escalope</option>
            </select>
        </div>

        <label class="mt-4">Ingrédients:</label>
        <div class="form-check">
            <input class="form-check-input" name="Harissa"  type="checkbox" value="" id="Harissa">
            <label class="form-check-label" for="Harissa">
                Harissa
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="Salade" type="checkbox" value="" id="Salade" >
            <label class="form-check-label" for="Salade">
                Salade
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="Mayonnaise" type="checkbox" value="" id="Mayonnaise" >
            <label class="form-check-label" for="Mayonnaise">
                Mayonnaise
            </label>
            <br><br>
            <div class="form-check">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
</body>
</html>
