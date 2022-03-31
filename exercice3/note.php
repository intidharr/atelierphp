<?php
session_start();
if (isset($_POST['note'])) {
    $ind = "note" . $_SESSION['num'];
    $_SESSION[$ind] = $_POST['note'];
    $n = $_SESSION['num'];
    for ($i = 1; $i < $n + 1; $i++) {
        $in = "note" . $i;
        $note = $_SESSION[$in];
?>
        <?php
        echo "$in : <br>"
        ?>
        <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.css">
        <ul>
            <li class="list-group-item"><?php echo "$note"  ?></li>
        </ul>


<?php

    }
}
?>