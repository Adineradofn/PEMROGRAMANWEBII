<!DOCTYPE HTML>
<html>
    <body>
    <?php
    $samsung = array(
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    );

    echo "<table border='1'>";
    echo "<tr><th>Daftar Smartphone Samsung</th></tr>";

    foreach($samsung as $samsung) {
        echo "<tr>";
        echo "<td>" . $samsung . "</td>";
        echo "</tr>";
    }

    echo "</td></tr>";
    echo "</table>";
    ?>
    </body>
</html>
