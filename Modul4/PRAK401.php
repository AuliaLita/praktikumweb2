<html>
<head>
    <style>
        table
        {
            border: black
        }
		td
        {border: 1px solid;
			width: 30px;
			height: 30px;
            text-align: center;
        }
        
    </style>
</head>
<body>
<form method ="POST" action="">
        <div>
        <label for="">Panjang :</label>
        <input type="text"name="panjang">
        </div>
        <div>
        <label for="">Lebar :</label>
        <input type="text"name="lebar">
        </div>
        <div>
        <label for="">Nilai :</label>
        <input type="text" name="nilai">
        <div>
        <input type ="submit" name = "cetak" value ="Cetak">
        </div>
        <br>
    </form>

<?php

       $panjang = "";
       $lebar = "";
       $nilai = "";

        if(isset($_POST['cetak']))
        {
            if(isset($_POST['panjang']))
            {
                $panjang = $_POST['panjang'];
            }
            if(isset($_POST['lebar']))
            {
                $lebar = $_POST['lebar'];
            }
            if(isset($_POST['nilai']))
            {
                $nilai = $_POST['nilai'];
            }
            $a = explode(" ",$nilai); 
            if($panjang * $lebar < count($a)){
                echo "<h2>Panjang nilai tidak sesuai dengan ukuran matrix</h2>";
            }
            else{?>
            <table cellspacing="0" cellpadding ="0">
            <?php
                for($x = 0 ; $x < $panjang ; $x++)
                {
                    ?><tr>
                       <?php 
                       for($y=0 ;$y < $lebar ; $y++)
                       {
                        ?>   
                        <td>
                            <?php
                            if(empty($a[($x * $panjang) + $y]))
                            {
                                echo "~";
                            }
                            else
                            {
                               echo $a[($x * $panjang) + $y];
                            }
                             ?>
                        </td>
                       <?php } ?>
                    </tr> 
                <?php } ?>
        </table>  <?php
        }
    }
?>
</body>
</html>