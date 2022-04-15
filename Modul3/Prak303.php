<html>
<head>
    <style>
        img{
            width: 15px;
            height: 15px;
        }
    </style>
</head>
<body>
    <form method ="POST" action="">
        <div>
        <label for="">Batas Bawah :</label>
        <input type="text" name ="bawah"></br>
        </div>
        <div>
        <label for="">Batas Atas :</label>
        <input type="text" name ="atas"></br>
        </div>
        <div>
        <button type="submit">Cetak</button>
        </div>
    </form>
<?php
       $bawah =  NULL;
       $atas = NULL;
       $starImg = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

       if($_SERVER["REQUEST_METHOD"]=="POST"){
           if(isset($_POST['bawah'])){
               $bawah = $_POST['bawah'];
           }
           if(isset($_POST['atas'])){
               $atas = $_POST['atas'];
            }
       }echo "</br>";
       do{
           
           if($bawah > $atas){
               echo "<h2>Inputan Salah!!!</h2>";
           }
           
           else{
            $tambah = $bawah + 7;
            if($tambah % 5 == 0){    
                echo "<img src = '$starImg'> ";
            }
            else{
                echo"$bawah ";
            }
           }
           $bawah++;
       }while($bawah <= $atas);
    ?>
</body>
</html>