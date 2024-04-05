<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 25%;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: red;
            font-size: 24px;
            padding: 15px;
        }
    </style>
</head>
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
echo "</table>";
?>

</body>
</html>
