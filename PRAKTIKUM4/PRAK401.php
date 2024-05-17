<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Input and Output</title>
    <style>
        table {
            border-collapse: collapse;
            width: 5%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="rows">Panjang :</label><br>
        <input type="number" id="rows" name="rows" required><br><br>
        <label for="cols">Lebar :</label><br>
        <input type="number" id="cols" name="cols" required><br><br>
        <label for="values">Nilai :</label><br>
        <textarea id="values" name="values" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Cetak Matriks"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = intval($_POST["rows"]);
        $cols = intval($_POST["cols"]);
        $values = $_POST["values"];
        
        $valuesArray = explode(" ", $values);

        if (count($valuesArray) != $rows * $cols) {
            echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks.</p>";
        } else {
            echo "<table>";
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    echo "<td>" . htmlspecialchars($valuesArray[$i * $cols + $j]) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
