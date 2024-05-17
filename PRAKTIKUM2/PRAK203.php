<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $error_message = "tidak boleh kosong";

    $nilai_input = "";
    $satuan_awal = "";
    $satuan_hasil = "";

    if(isset($_POST['konversi'])) {
        $nilai_input = $_POST['nilai_input'];
        $satuan_awal = $_POST['satuan_awal'];
        if(isset($_POST['satuan_hasil'])){
            $satuan_hasil = $_POST['satuan_hasil'];
        }
    }

    function tampilkanKonversi() {
        global $nilai_input, $satuan_awal, $satuan_hasil;

        if (!empty($nilai_input) && !empty($satuan_awal) && !empty($satuan_hasil)) {
            switch ($satuan_awal) {
                case "Celsius":
                    switch ($satuan_hasil) {
                        case "Fahrenheit2":
                            $hasil = ($nilai_input * 9/5) + 32;
                            echo "$hasil &degF";
                            break;
                        case "Rheamur2":
                            $hasil = $nilai_input * 4/5;
                            echo "$hasil &degR";
                            break;
                        case "Kelvin2":
                            $hasil = $nilai_input + 273.15;
                            echo "$hasil K";
                            break;
                    }
                    break;
                case "Fahrenheit":
                    switch ($satuan_hasil) {
                        case 'Celsius2':
                            $hasil = ($nilai_input - 32) * 5/9;
                            echo "$hasil &degC";
                            break;
                        case 'Rheamur2':
                            $hasil = ($nilai_input - 32) * 4/9;
                            echo "$hasil &degR";
                            break;
                        case 'Kelvin2':
                            $hasil = ($nilai_input - 32) * 5/9 + 273.15;
                            echo "$hasil K";
                            break;
                    }
                    break;
                case "Rheamur":
                    switch ($satuan_hasil) {
                        case 'Celsius2':
                            $hasil = $nilai_input * 5/4;
                            echo "$hasil &degC";
                            break;
                        case 'Fahrenheit2':
                            $hasil = $nilai_input * 9/4 + 32;
                            echo "$hasil &degF";
                            break;
                        case 'Kelvin2':
                            $hasil = $nilai_input * 5/4 + 273.15;
                            echo "$hasil K";
                            break;
                    }
                    break;
                case "Kelvin":
                    switch ($satuan_hasil) {
                        case 'Celsius2':
                            $hasil = $nilai_input - 273.15;
                            echo "$hasil &degC";
                            break;
                        case 'Fahrenheit2':
                            $hasil = ($nilai_input - 273.15) * 9/5 + 32;
                            echo "$hasil &degF";
                            break;
                        case 'Rheamur2':
                            $hasil = ($nilai_input - 273.15) * 4/5;
                            echo "$hasil &degR";
                            break;
                    }
                    break;
            }
        }
    }
    ?>
    
    <form method="post">
        Nilai: <input type="number" name="nilai_input" value="<?php echo htmlspecialchars($nilai_input); ?>"><br>
        
        Dari: <br>
        <input type="radio" name="satuan_awal" value="Celsius" <?php if (isset($satuan_awal) && $satuan_awal == "Celsius") echo "checked";?>>Celsius <br>
        <input type="radio" name="satuan_awal" value="Fahrenheit" <?php if (isset($satuan_awal) && $satuan_awal == "Fahrenheit") echo "checked";?>>Fahrenheit <br>
        <input type="radio" name="satuan_awal" value="Rheamur" <?php if (isset($satuan_awal) && $satuan_awal == "Rheamur") echo "checked";?>>Rheamur <br>
        <input type="radio" name="satuan_awal" value="Kelvin" <?php if (isset($satuan_awal) && $satuan_awal == "Kelvin") echo "checked";?>>Kelvin <br>
        
        Ke: <br>
        <input type="radio" name="satuan_hasil" value="Celsius2" <?php if (isset($satuan_hasil) && $satuan_hasil == "Celsius2") echo "checked";?>>Celsius <br>
        <input type="radio" name="satuan_hasil" value="Fahrenheit2" <?php if (isset($satuan_hasil) && $satuan_hasil == "Fahrenheit2") echo "checked";?>>Fahrenheit <br>
        <input type="radio" name="satuan_hasil" value="Rheamur2" <?php if (isset($satuan_hasil) && $satuan_hasil == "Rheamur2") echo "checked";?>>Rheamur <br>
        <input type="radio" name="satuan_hasil" value="Kelvin2" <?php if (isset($satuan_hasil) && $satuan_hasil == "Kelvin2") echo "checked";?>>Kelvin <br>
        
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <h2>Hasil Konversi: <?php tampilkanKonversi(); ?></h2>
</body>
</html>
