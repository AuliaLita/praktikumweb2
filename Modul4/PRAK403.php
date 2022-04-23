<html>
<head>
    <style>
         tr{
            border: black;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
 
<table border="1",cellspacing="0" cellpadding ="1">
        <tr bgcolor = lightgray>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
    </tr>
        <?php
          $diket = [
            ["no" => 1, "nama" => "Ridho", 
            "matkul" => [
                ["mataKuliah" =>"Pemrograman I", "sks" => 2], 
                ["mataKuliah" => "Praktikum Pemrograman I", "sks" => 1],
                ["mataKuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
                ["mataKuliah" => "Arsitektur Komputer", "sks" => 1]
            ]
            ],
    
            ["no" => 2, "nama" => "Ratna", 
            "matkul" => [
                ["mataKuliah" =>"Basis Data I", "sks" => 2], 
                ["mataKuliah" => "Praktikum Basis Data I", "sks" => 1],
                ["mataKuliah" => "Kalkulus", "sks" => 3]
            ]
            ],
    
            ["no" => 3, "nama" => "Tono", 
            "matkul" => [
                ["mataKuliah" => "Rekayasa Perangkat Lunak", "sks" => 3], 
                ["mataKuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
                ["mataKuliah" => "Komputasi Awan", "sks" => 3], 
                ["mataKuliah" => "Kecerdasan Bisnis", "sks" => 3]
            ]
            ]
        ];
            for ($x = 0; $x < count($diket); $x++) {
                $jumlah = 0;
                for ($y = 0; $y < count($diket[$x]["matkul"]); $y++) { 
                    $jumlah += $diket[$x]["matkul"][$y]["sks"];
                }
                $diket[$x]["jumlah"] = $jumlah;
                if ($diket[$x]["jumlah"] < 7) {
                    $diket[$x]["keterangan"] = "<div style = background-color:red>Revisi KRS</div>";
                } else {
                    $diket[$x]["keterangan"] = "<div style = background-color:green>Tidak Revisi</div>";
                }
            }

            for ($x = 0; $x < count($diket); $x++)
             {
                for ($y = 0; $y < count($diket[$x]["matkul"]); $y++) { 
                    echo "<tr>";
                    if ($y == 0) {
                        echo "<td>".$diket[$x]["no"]."</td>";
                        echo "<td>".$diket[$x]["nama"]."</td>";
                        echo "<td>".$diket[$x]["matkul"][$y]["mataKuliah"]."</td>";
                        echo "<td>".$diket[$x]["matkul"][$y]["sks"]."</td>";
                        echo "<td>".$diket[$x]["jumlah"]."</td>";
                        echo "<td>".$diket[$x]["keterangan"]."</td>";
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$diket[$x]["matkul"][$y]["mataKuliah"]."</td>";
                        echo "<td>".$diket[$x]["matkul"][$y]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>