<html>
<body>

    <form method = "POST">
            <div>
            <label for = " ">Nilai : </label>
            <input type = "text" name = "nilai"></br>
            </div>
            <div>
            <button type="submit">Konversi</button>
            </div>
    </form>

<?php
    $Nilai = NULL;
    if($_SERVER ["REQUEST_METHOD"]=="POST");{
        if(isset($_POST['nilai'])){
            $Nilai = $_POST['nilai'];
        }
    }
    if($Nilai == 0 and $Nilai != NULL){
        echo "<h2>Hasil : Nol</h2>";
    }
    elseif($Nilai >=1 && $Nilai < 10 ){
        echo "<h2>Hasil : Satuan</h2>";
    }
    elseif($Nilai >=11 && $Nilai < 20){
        echo "<h2>Hasil : Belasan</h2>";
    }
    elseif($Nilai == 10 || $Nilai >=20 &&$Nilai <= 99){
        echo "<h2>Hasil : Puluhan</h2>";
    }
    elseif($Nilai >=100 && $Nilai <=999){
        echo "<h2>Hasil : Ratusan</h2>";
        
    }
    elseif($Nilai >=1000){
        echo "<h2>Hasil : Anda Menginput Melebihi Limit Bilangan</h2>";
    }
    elseif($Nilai <0 ){
        echo "<h2>Hasil : INPUTAN SALAH </h2>";
    }
    
    ?>
</body>
</html>
