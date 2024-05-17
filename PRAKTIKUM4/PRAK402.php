<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #C0C0C0;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Nilai Huruf</th>
        </tr>
        <?php
        $data_mahasiswa = array(
            "Andi" => array("NIM" => "2101001", "Nilai_UTS" => 87, "Nilai_UAS" => 65),
            "Budi" => array("NIM" => "2101002", "Nilai_UTS" => 76, "Nilai_UAS" => 79),
            "Tono" => array("NIM" => "2101003", "Nilai_UTS" => 50, "Nilai_UAS" => 41),
            "Jessica" => array("NIM" => "2101004", "Nilai_UTS" => 60, "Nilai_UAS" => 75)
        );

        foreach ($data_mahasiswa as $nama => $mahasiswa) {
            $nilai_akhir = 0.4 * $mahasiswa["Nilai_UTS"] + 0.6 * $mahasiswa["Nilai_UAS"];
            $nilai_huruf = "";

            if ($nilai_akhir >= 80) {
                $nilai_huruf = "A";
            } elseif ($nilai_akhir >= 70) {
                $nilai_huruf = "B";
            } elseif ($nilai_akhir >= 60) {
                $nilai_huruf = "C";
            } elseif ($nilai_akhir >= 50) {
                $nilai_huruf = "D";
            } else {
                $nilai_huruf = "E";
            }

            echo "<tr>";
            echo "<td>$nama</td>";
            echo "<td>{$mahasiswa['NIM']}</td>";
            echo "<td>{$mahasiswa['Nilai_UTS']}</td>";
            echo "<td>{$mahasiswa['Nilai_UAS']}</td>";
            echo "<td>" . number_format($nilai_akhir, 1) . "</td>";
            echo "<td>$nilai_huruf</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
