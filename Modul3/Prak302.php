<html>
<head>
    <style>
        img{
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
<form method ="POST" action="">
        <div>
        <label for="">Tinggi :</label>
        <input type="text" name = "tinggi">
        </div>
        <div>
        <label for= "">Alamat Gambar :</label>
        <input type="text" name ="gambar">
        </div>
        <div>
        <button type="submit">Cetak</button>
        </div>
    </form>
    <?php
        
        $tinggi = null;
        $gambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
       
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['tinggi'])){
                $tinggi = $_POST['tinggi'];
            }
            if(isset($_POST['gambar'])){
                $gambar = $_POST['gambar'];
            }
        $x = 1;
        while($x <= $tinggi){
            $i=1;
            while($i <= $x){
                echo" &nbsp&nbsp&nbsp&nbsp";
                $i++;
        }
        $t = $tinggi;
        while($t >= $x){
            echo "<img src = $gambar>";
            $t--;
        }
        echo"<br>";
        $x++;
    }
}
?>        

</body>
</html>