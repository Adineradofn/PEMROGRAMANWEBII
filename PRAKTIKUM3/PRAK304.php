<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <?php 
    $bintanglima = NULL;
    $gambar = "<img src='bintanglima.png' width='70px'>";
    if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        $bintanglima = $_POST['bintang'];
    }
    if( isset($_POST['tambah']) ) {
        $bintanglima += 1;
    }
    if( isset($_POST['kurang']) ) {
        $bintanglima -= 1;
    }
    if( empty($bintanglima) ) { ?>
        <form action="" method="post">
                <label for="bintang">Jumlah Bintang :</label>
                <input type="text" name="bintang"> </br>
                <button type="submit" name="submit">Submit</button>
        </form>
    <?php } ?>
    <?php if( !empty($bintanglima) ) {
        echo "Jumlah Bintang : $bintanglima "; ?>
        <br><br><br><br>
        <?php for( $i = 0; $i < $bintanglima; $i++ ) {
            echo "$gambar";
        } ?>
        <form action="" method="post">
            <input type="text" name="bintang" value="<?= $bintanglima ?>" hidden>
            <button type="submit" name="tambah" value="Rambah">Tambah</button>
            <button type="submit" name="kurang" value="kurang">Kurang</button> 
        </form>
    <?php } ?>
</body>
</html>