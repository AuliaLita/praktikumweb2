<html>
<body>
    <form method ="POST" action="">  
        <div>
        <label>Jumlah Peserta : </label>
        <input type="text" name="peserta">
        </div>
        <div>
        <button type="submit">Cetak</button>
        </div>
    </form>

<?php
    $peserta = NULL;
    $x =  1;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['peserta']))
        {
            $peserta = $_POST['peserta'];
        }

        while($x <= $peserta){
            if($x % 2 == 1){
                echo "<font color = red ><h2>Peserta ke - ".$x."</br></h2></font>";
            }
            else if ($x % 2 == 0) {
                echo "<font color= Green><h2>Peserta ke - ".$x."</br></h2></font>";
            } 
            $x++;   
        }
        
    }    
?>
</body>
</html>