<?php 
session_start();
if(isset($_SESSION["num"])) {$_SESSION["num"]++;}
else {$_SESSION["num"]=1;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.css">
    <title>note</title>
</head>
<body>
<h1 style="text-align:center ">notes</h1>
<form action="note.php" method="post">
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">donner une note</label>
    <div class="col-sm-10">
      <input name="note" type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="note">
    </div>
  </div>
</form>  
</body>
</html>