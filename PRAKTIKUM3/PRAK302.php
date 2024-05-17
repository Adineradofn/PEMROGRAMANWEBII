<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
img {
width: 50px;
height: 50px;
                }
</style>
</head>
<body>

<form action="" method="post">
    Tinggi Segitiga: <input type="number" name="tinggi"><br>
    Alamat Gambar: <input type="text" name="link" value = ><br>
    <input type="submit" value="Tampilkan Segitiga" name="submit">
</form>

    <div class="segitiga">
    <?php
    function build_triangle($height, $image) {
        $line = $height;
        $ws = 0;
        while ($line > 0) {
            echo str_repeat('<img src=" " class= "ws">', $ws);
            echo str_repeat('<img src="' . $image . '">', $line) . "<br>";
            $line--; $ws++;
            }
        }

        if(isset($_POST['submit'])){
            $height = $_POST['tinggi'];
            $image = $_POST['link'];
            build_triangle($height, $image);
        }
        ?>
</div>
</body>
</html>