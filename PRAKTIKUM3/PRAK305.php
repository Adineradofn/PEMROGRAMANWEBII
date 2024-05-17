<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="kata">
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <?php if( isset($_POST['submit']) ) : ?>
        <?php
            $kt = $_POST['kata'];
            $ar = str_split($kt);
            echo "<h2>Input:</h2>$kt<br><h2>Output:</h2>";
            for( $i = 1; $i <= count($ar); $i = $i + 1 ) {
            for( $j = 1; $j <= count($ar); $j = $j + 1 ) {
                if( $j == 1 ) {
                    echo strtoupper($ar[$i-1]);
                } else {
                    echo strtolower($ar[$i-1]);
                 }
                }
            } ?>
    <?php endif; ?>
</body>
</html>