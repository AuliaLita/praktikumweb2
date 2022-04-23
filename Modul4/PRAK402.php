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
<table border="1",cellspacing="0" cellpadding ="3">
            <tr bgcolor = lightgray>
            <td>Nama</td>
            <td>NIM</td>
            <td>Nilai UTS</td>
            <td>Nilai UAS</td>
            <td>Nilai Akhir</td>
            <td>Huruf</td>
        </tr>
        <?php

         $diket = [
            ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
            ["nama" => "Budi", "nim" => "2101002", "uts" => 85, "uas" => 79],
            ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
            ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => -5],
        ];

        for ($x = 0; $x < count($diket); $x++) { 
            $diket[$x]["nilaiAkhir"] = $diket[$x]["uts"] * 0.4 + $diket[$x]["uas"] * 0.6;
            if($diket[$x]["nilaiAkhir"] >= 80)
            {
                $diket[$x]["huruf"] = "A";
            }elseif($diket[$x]["nilaiAkhir"] >= 70)
            {
                $diket[$x]["huruf"] = "B";
            }elseif($diket[$x]["nilaiAkhir"] >= 60)
            {
                $diket[$x]["huruf"] = "C";
            }elseif($diket[$x]["nilaiAkhir"] >= 50 )
            {
                $diket[$x]["huruf"] = "D";
            }
            else
            {
                $diket[$x]['huruf'] = 'E';
            }
        }

        for ($x = 0; $x < count($diket); $x++) { 
            echo "<tr>";
            echo "<td>".$diket[$x]["nama"]."</td>";
            echo "<td>".$diket[$x]["nim"]."</td>";
            echo "<td>".$diket[$x]["uts"]."</td>";
            echo "<td>".$diket[$x]["uas"]."</td>";
            echo "<td>".$diket[$x]["nilaiAkhir"]."</td>";
            echo "<td>".$diket[$x]["huruf"]."</td>";
            echo "</tr>";
        }       
        ?>
    </table>
</body>
</html>