<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <form action="" method="post">
            Jumlah Peserta: <input type="number" name="nilai"><br>
            <input type="submit" value="Cetak" name="cetak">
        </form>

        <?php
           if(isset($_POST['cetak'])){
            $nilai = $_POST['nilai'];
            $angka = 1;
            while($nilai>0){
                if($angka % 2 != 0){
                    echo "<h2 style=\"color:#FF0000;\">Peserta ke-$angka</h2>";
                } else {
                    echo "<h2 style=\"color:#6abe30;\">Peserta ke-$angka</h2>";
                }
                $nilai--;
                $angka++;
            }
           }
        ?>
</body>
</html>