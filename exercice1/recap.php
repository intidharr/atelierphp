<?php
$title="Facture : ";
include_once 'tete.php';
$_POST["Nom"]=htmlspecialchars($_POST["Nom"]);
$_POST["Prenom"]=htmlspecialchars($_POST["Prenom"]);
$_POST["Adresse"]=htmlspecialchars($_POST["Adresse"]);
$total=4*$_POST['nombresandwich'];
$msg="Non";
if($_POST['nombresandwich']>=10)
{$total*=0.9;
$msg='Oui';
}
$valid=array('.jpeg','.jpg','.gif','.png');

if($_FILES['CIN']['error']>0)
{
    ?>
    <div class="alert alert-danger" role="alert">
        Une erreur est survenu lors du téléchargement de la carte d'idendité.
    </div>
    <?php
     die;
}
$maxsize=50000;
$size=$_FILES['CIN']['size'];
if($size>$maxsize)
{
   ?>
    <div class="alert alert-danger" role="alert">
            Fichier Trop grand !!
        </div>
    <?php
    die;
}
$name=$_FILES['CIN']['name'];
$ext=".".strtolower(substr(strchr($name,"."),1));

if(!in_array($ext,$valid))
    {
        ?>
        <div class="alert alert-danger" role="alert">
            Veuillez introduire une image (format : '.jpeg', '.jpg', '.gif' ou '.png')
        </div>
        <?php
        die;
    }

$tmpname=$_FILES['CIN']['tmp_name'];
$unique=md5(uniqid(rand(),true));
$name="upload/".time().$unique.$ext;
$res=move_uploaded_file($tmpname,$name);

?>

<table class="table table-dark table-hover" >
    <thead style="text-align: center;">
    <tr>
        <th colspan="2">Récapitulation de votre commande</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Nom</td>
        <td style="text-align: center;"><?php echo($_POST['Nom']) ?></td>

    </tr>
    <tr>
        <td>Prenom</td>
        <td style="text-align: center;"><?php echo($_POST['Prenom']) ?></td>

    </tr>
    <tr>
        <td>Adresse</td>
        <td style="text-align: center;"><?php echo($_POST['Adresse']) ?></td>

    </tr>
    <tr>
        <td>Nombre de sandwich</td>
        <td style="text-align: center;"><?php echo($_POST['nombresandwich']) ?></td>
    </tr>
    <tr>
        <td>Type des sandwichs</td>
        <td style="text-align: center;"><?php echo($_POST['Type']) ?></td>
    </tr>
    <tr>
        <td>Remise</td>
        <td style="text-align: center;"><?php echo($msg) ?></td>
    </tr>
    <tr>
        <td>Prix</td>
        <td style="text-align: center;"><?php echo($total) ?></td>
    </tr>

    </tbody>
</table>