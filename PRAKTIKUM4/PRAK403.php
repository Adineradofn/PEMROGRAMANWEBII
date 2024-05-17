<!DOCTYPE html>
<html lang="en">
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
            background-color: #f2f2f2;
        }
        .revisi {
            background-color: #FF0000; /* Warna merah untuk revisi */
        }
        .tidak-revisi {
            background-color: #00FF00; /* Warna hijau untuk tidak revisi */
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
        $data_mahasiswa = array(
            "Ridho" => array(
                array("Nama" => "Pemrograman I", "SKS" => 2),
                array("Nama" => "Praktikum Pemrograman I", "SKS" => 1),
                array("Nama" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2),
                array("Nama" => "Arsitektur Komputer", "SKS" => 3)
            ),
            "Ratna" => array(
                array("Nama" => "Basis Data I", "SKS" => 2),
                array("Nama" => "Praktikum Basis Data I", "SKS" => 1),
                array("Nama" => "Kalkulus", "SKS" => 3)
            ),
            "Tono" => array(
                array("Nama" => "Rekayasa Perangkat Lunak", "SKS" => 3),
                array("Nama" => "Analisis dan Perancangan Sistem", "SKS" => 3),
                array("Nama" => "Komputasi Awan", "SKS" => 3),
                array("Nama" => "Kecerdasan Bisnis", "SKS" => 3)
            )
        );

        $no = 1;
        foreach ($data_mahasiswa as $nama => $mata_kuliah_list) {
            $total_sks = 0;
            foreach ($mata_kuliah_list as $mata_kuliah) {
                $total_sks += $mata_kuliah["SKS"];
            }

            $keterangan = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi";
            $class = ($total_sks < 7) ? "revisi" : "tidak-revisi";

            $rowspan = count($mata_kuliah_list);
            foreach ($mata_kuliah_list as $index => $mata_kuliah) {
                echo "<tr>";
                if ($index == 0) {
                    echo "<td rowspan='$rowspan'>$no</td>";
                    echo "<td>{$mata_kuliah['Nama']}</td>";
                    echo "<td>{$mata_kuliah['SKS']}</td>";
                    echo "<td rowspan='$rowspan'>$total_sks</td>";
                    echo "<td rowspan='$rowspan' class='$class'>$keterangan</td>";
                } else {
                    echo "<td>{$mata_kuliah['Nama']}</td>";
                    echo "<td>{$mata_kuliah['SKS']}</td>";
                }
                echo "</tr>";
            }
            $no++;
        }
        ?>
    </table>
</body>
</html>
