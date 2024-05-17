<!DOCTYPE html>
<html>
<head>
    <title>Konversi Angka</title>
</head>
<body>
    <form action="" method="post">
        Masukkan Angka : <input type="number" name="input_angka"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
    <?php
    if(isset($_POST["submit"])) :
        $input_angka = $_POST['input_angka'];
        if($input_angka == 0) {
            $output = "Nol";
        } elseif($input_angka > 0 && $input_angka <= 9) {
            $output = "Satuan";
        } elseif($input_angka >= 10 && $input_angka < 20) {
            $output = "Belasan";
        } elseif($input_angka >= 20 && $input_angka < 100) {
            $output = "Puluhan";
        } elseif($input_angka >= 100 && $input_angka < 1000) {
            $output = "Ratusan";
        } else {
            $output = "Angka yang Anda masukkan melebihi limit yang diizinkan";
        }
        echo "<h2>Hasil: $output</h2>";
    endif;
    ?>
</body>
</html>
