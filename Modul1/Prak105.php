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
            <?php
                 $Merk = array(1=>"Samsung Galaxy S22", 2=>"Samsung Galaxy S22+", 3=>"Samsung Galaxy A03", 4=>"Samsung Galaxy Xcover 5");
                 echo "
                     <tr style='background-color:red;font-size: 25px;height: 75px;'>
                        <td style ='font-weight: bold'>Daftar Smartphone Samsung</td>
                    </tr>
                    <tr>
                        <td>$Merk[1]</td>
                    </tr>
                    <tr> 
                        <td>$Merk[2]</td>
                    </tr>
                    <tr> 
                        <td>$Merk[3]</td>
                    </tr>
                    <tr> 
                        <td>$Merk[4]</td>
                    </tr>"
                
            ?> 
        <table>
        </body>
</html>
