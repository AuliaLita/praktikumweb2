<html>
    <head>
         <style>
             span {color: red;}
         </style>
    </head>
<body>

    <?php
        
        $NamaKosong  = NULL;
        $NimKosong = NULL;
        $KelaminKosong = NULL; 
        $Nama = NULL;
        $Nim = NULL;
        $Jenis_Kelamin = NULL;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
            $NamaKosong = " nama tidak boleh kosong";
            } else {
            $Nama = $_POST["nama"];
            }
            if (empty($_POST["nim"])) {
            $NimKosong = " nim tidak boleh kosong";
            } else {
            $Nim = $_POST["nim"];
            }
            if (empty($_POST["gender"])) {
            $KelaminKosong = " jenis kelamin tidak boleh kosong";
            } else {
            $Jenis_Kelamin = $_POST["gender"];
            }
            
        }
    ?>
        <form method = "POST" >
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama">
                <span>*<?php echo $NamaKosong;?></span></br>
        </div>
        <div>
            <label for="">NIM</label>
            <input type="text" name="nim">
                <span>*<?php echo $NimKosong;?></span></br>
        </div>
        <div>
            <label for = " ">Jenis Kelamin: </label>
                <span>*<?php echo $KelaminKosong;?></span></br>
        </div>
        <div>
            <input type = "radio" name = "gender" value = "Laki-Laki">Laki-Laki<br>
            <input type = "radio" name = "gender" value = "Perempuan">Perempuan</br>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        </form>

<?php
        if(empty($NamaKosong) && empty($NimKosong) && empty($KelaminKosong)){
            echo "$Nama<br>";
            echo "$Nim<br>";
            echo "$Jenis_Kelamin<br>";
        }
    ?>
</body>
</html>


