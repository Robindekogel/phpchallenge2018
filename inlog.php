<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 1-6-2018
 * Time: 11:44
 */


if ($_POST["email"] == "piet@wordonline.nl" && $_POST ['wachtwoord'] == "doetje123") {
    echo '<a href="index.html">Klik hier om verder te gaan</a>';
}elseif ($_POST["email"] == "klass@carpets.nl" && $_POST ['wachtwoord'] == "snoepje777") {
    echo "welkom";
}elseif ($_POST["email"] == "truushendriks@wegweg.nl" && $_POST ['wachtwoord'] == "arkiearkie201") {
    echo "welkom";
} else {
    echo "Sorry geen toegang";
}

?>


