<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form method="post">
        Batas Bawah : <input type="number" name="bawah"></br>
        Batas Atas : <input type="number" name="atas"></br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $bwh = $_POST['bawah'];
    $ats = $_POST['atas'];
    $i = $bwh;
    do {
        if (($i + 7) % 5 == 0) {
            echo "<img src='bintanglima.png' width='15px' height='15px'>";
        }
        else {
            echo $i;
        }
        echo "&nbsp";
        $i++;
    }
    while ($i <= $ats);
}
?>