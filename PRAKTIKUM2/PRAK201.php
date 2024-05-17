<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 400px; 
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
            padding: 15px;
    
        }
      
    </style>
</head>
<body>
    <form method="post">
        <label for="nama1">Nama : 1</label>
        <input type="text" id="nama1" name="nama1"><br><br>
        
        <label for="nama2">Nama : 2</label>
        <input type="text" id="nama2" name="nama2"><br><br>
        
        <label for="nama3">Nama : 3</label>
        <input type="text" id="nama3" name="nama3"><br><br>
        
        <input type="submit" name="submit" value="Urutkan">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];

        $names = array($nama1, $nama2, $nama3);
        sort($names);

        echo "<table>";
        echo "<tr><th>Output</th></tr>";
        echo "<tr><td>";
        foreach ($names as $index => $nama) {
            echo $nama . "<br>";
        }
        echo "</td></tr>";
        echo "</table>";
    }   
    ?>
</body>
</html>
