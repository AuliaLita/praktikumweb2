<html>
<head>
    <style>
        img{
            width: 65px;
            height: 65px;
        }
    </style>
</head>
<body>
    <?php

    $jumlah = NULL;
    $gambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlah = $_POST["jumlah"];
        }
        if (isset($_POST['tambah'])) {
            $jumlah ++;
        }
        if (isset($_POST['kurang'])) {
            $jumlah --;
        }
        if (empty($jumlah)) { ?>
            <form action="" method="post">
                Jumlah Bintang <input type="text" name="jumlah"><br>
                <button type="submit">Submit</button>
            </form>
        <?php }
        if(!empty($jumlah)){
            echo "Jumlah bintang $jumlah " ?>

            <br><br>
            <?php
            for($i = 0; $i < $jumlah; $i++){
                echo "<img src = '$gambar'> ";
            }
            ?>
            <form action="" method="post">
            <input type="text" name="jumlah" value="<?= $jumlah ?>" hidden>
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
        <?php }
        ?>
        
</body>
</html>