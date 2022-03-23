<html>
<body>
   
    <form method = "POST">
        <div>
        <label>Nilai    : </label>
        <input type="text" name="nilai"><br>
        </div>
        <div> 
        <label>Dari     : </label><br>
        <input type="radio" name="dari" value="celcius">Celcius<br>
        <input type="radio" name="dari" value="fahrenheit">Fahrenheit<br>
        <input type="radio" name="dari" value="reamur">Rheamur<br> 
        <input type="radio" name="dari" value="kelvin">Kelvin<br>
        </div>
        <div>
        <label>Ke       : </label><br>
        <input type="radio" name="ke" value="Kecelcius">Celcius<br>
        <input type="radio" name="ke" value="Kefahrenheit">Fahrenheit<br>
        <input type="radio" name="ke" value="Kereamur">Rheamur<br>
        <input type="radio" name="ke" value="Kekelvin">Kelvin<br>
        </div>
        <div>
        <input type="submit" name="konversi" value="Konversi"><br>
        </div>
    </form>

<?php
    $nilai = NULL; 
    $dari = NULL;
    $ke = NULL;
    if($_SERVER ["REQUEST_METHOD"]=="POST")
    if(isset($_POST['konversi'])){
        $nilai = $_POST['nilai'];
        $dari = (isset($_POST['dari']) ? $_POST['dari'] : NULL);
        $ke = (isset($_POST['ke']) ? $_POST['ke'] : NULL);
        switch($dari){
        case "celcius" :
            switch($ke){
            case "Kecelcius" :
                echo "<h1> Hasil Konversi: $nilai °C</h1>";
                break;
            case "Kefahrenheit" :
                $hasil = $nilai * 9 / 5 + 32;
                echo "<h1> Hasil Konversi: $hasil °F</h1>";
                break;
            case "Kereamur" : 
                $hasil = $nilai * 4 / 5;
                echo "<h1> Hasil Konversi: $hasil °R</h1>";
                break;
            case "Kekelvin" :
                $hasil = $nilai + 273;
                echo "<h1> Hasil Konversi: $hasil °K</h1>";
                break;
            default:
                echo "<h1>Anda belum memilih</h1>";
            }
            break;
        case "fahrenheit" :
            switch($ke){
            case "Kecelcius" :
                $hasil = ($nilai - 32) * 5 / 9;
                echo "<h1> Hasil Konversi: $hasil °C</h1>";
                break;
            case "Kefahrenheit" :
                echo "<h1> Hasil Konversi: $nilai °F</h1>";
                break;
            case "Kereamur" :
                $hasil = ($nilai - 32) * 4 / 9;
                echo "<h1> Hasil Konversi: $hasil °R</h1>";
                break;
            case "Kekelvin" :
                $hasil = ($nilai - 32) * 5 / 9 + 273;
                echo "<h1> Hasil Konversi: $hasil °K</h1>";
                break;
            default:
                echo "<h1>Anda belum memilih</h1>";
            }
            break;
        case "reamur" :
            switch($ke){
            case "Kecelcius" :
                $hasil = $nilai * 5 / 4;
                echo "<h1> Hasil Konversi: $hasil °C</h1>";
                break;
            case "Kefahrenheit" :
                $hasil = $nilai * 9 / 4 + 32;
                echo "<h1> Hasil Konversi: $hasil °F</h1>";
                break;
            case "Kereamur" :
                echo "<h1> Hasil Konversi: $nilai °R</h1>";
                break;
            case "Kekelvin" :
                $hasil = $nilai * 5 / 4 + 273;
                echo "<h1> Hasil Konversi: $hasil °K</h1>";
                break;
            default:
                echo "<h1>Anda belum memilih</h1>";
            }
            break;
        case "kelvin" :
            switch($ke){
            case "Kecelcius" :
                $hasil = $nilai - 273 ;
                echo "<h1> Hasil Konversi: $hasil °C</h1>";
                break;
            case "Kefahrenheit" :
                $hasil = ($nilai - 273) * 9 / 5 + 32;
                echo "<h1> Hasil Konversi: $hasil °F</h1>";
                break;
            case "Kereamur" :
                $hasil = ($nilai - 273) * 4 / 5;
                echo "<h1> Hasil Konversi: $hasil °R</h1>";
                break;
            case "Kekelvin" :
                echo "<h1> Hasil Konversi: $nilai °K</h1>";
                break;
            default:
                echo "<h1>Anda belum memilih</h1>";
            }
            break;
        default:
            echo "<h1>Anda belum memilih</h1>";
        }
    }
    ?>
</body>
</html>