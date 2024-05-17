<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Mahasiswa</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $error_message = "harus diisi";

    $nama = "";
    $nim = "";
    $jenis_kelamin = "";

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        if(isset($_POST['gender'])){
            $jenis_kelamin = $_POST['gender'];
        }
    }
    ?>

    <form method="post">
        Nama: <input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
        <span class="error">* <?php if(empty($nama)) echo $error_message;?></span> <br>
        
        NIM: <input type="text" name="nim" value="<?php echo htmlspecialchars($nim); ?>">
        <span class="error">* <?php if(empty($nim)) echo $error_message;?></span> <br> 
        
        Jenis Kelamin: <span class="error">* <?php if(empty($jenis_kelamin)) echo $error_message;?></span><br>
        <input type="radio" name="gender" value="Laki-Laki" <?php if (isset($jenis_kelamin) && $jenis_kelamin=="Laki-Laki") echo "checked";?>>Laki-laki
        <input type="radio" name="gender" value="Perempuan" <?php if (isset($jenis_kelamin) && $jenis_kelamin=="Perempuan") echo "checked";?>>Perempuan<br>
        
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        if(!empty($jenis_kelamin) && !empty($nama) && !empty($nim)) {
            echo "<h2>Output:</h2>";
            echo "$nama<br>";
            echo "$nim <br>";
            echo "Jenis Kelamin: $jenis_kelamin";
        }
    }
    ?>
</body>
</html>
