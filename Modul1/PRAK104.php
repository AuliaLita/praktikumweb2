<html>
    <head>
        <style>
            table, th, td {
            border: 0.5px solid black;
            }
        </style>
    </head>
    <body>
        <table>
                <th>Daftar Smartphone Samsung</th>
            <?php
                $Merk=array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung A03", "Samsung Galaxy Xcover 5");
                echo "
                    <tr> 
                        <td>$Merk[0]</td>
                    </tr>
                    <tr> 
                        <td>$Merk[1]</td>
                    </tr>
                    <tr> 
                        <td>$Merk[2]</td>
                    </tr>
                    <tr> 
                        <td>$Merk[3]</td>"
            ?>
            </table>
        </body>
</html>
