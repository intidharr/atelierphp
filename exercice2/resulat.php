<?php

if($_COOKIE['vote']=='N')
{
    setcookie('vote','O',time()+120,null,null,false,true);
?><h1>Votre vote à bien été enregistré</h1>

<?php }
else{
    ?>
    <script>alert('vous avez deja voté');</script>
<h1>Vous ne pouvez pas votez plus qu'une fois</h1>
<?php

}
?>