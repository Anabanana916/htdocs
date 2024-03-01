<?php
    session_start();
    echo "<h2> Your order qty is " . $_SESSION["qty"] . " and " . $_SESSION["price"] . "</h2></br>";

    echo "<h2> Your order qty is " . $_SESSION["qty"] * $_SESSION["price"] . "</h2></br>";
    
    echo "<h2> and the selected colour is $_POST[selcolour].</h2>"
?>
