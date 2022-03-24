<html>
<body>
<form method="POST">
    <div>
		<label>Nama: 1</label>
		<input type="text" name="nama_1"><br>
    </div>
    <div>
		<label>Nama: 2</label>
		<input type="text" name="nama_2"><br>
    </div>
    <div>
		<label>Nama: 3</label>
		<input type="text" name="nama_3"><br>
    </div>
    <div>
		<button type="submit" name="urutkan">urutkan</button>
    </div>
</form>

<?php
	$nama_1 = NULL;
	$nama_2 = NULL;
	$nama_3 = NULL;
	
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["urutkan"])){
		$nama_1 = $_POST["nama_1"];
		$nama_2 = $_POST["nama_2"];
		$nama_3 = $_POST["nama_3"];

		            //1>2>3
		if($nama_1 < $nama_2 && $nama_2 < $nama_3){
            echo "$nama_1 <br>";
            echo "$nama_2 <br>";
            echo "$nama_3 <br>";
		}
		            //1>3>2
		else if($nama_1 < $nama_2 && $nama_2 > $nama_3 && $nama_1 < $nama_3){
            echo "$nama_1 <br>";
            echo "$nama_3 <br>";
            echo "$nama_2 <br>";
		}
		            //2>1>3
		else if($nama_1 > $nama_2 && $nama_2 < $nama_3 && $nama_1 < $nama_3){
            echo "$nama_2 <br>";
            echo "$nama_1 <br>";
            echo "$nama_3 <br>";
            
		}
		            //2>3>1
		else if($nama_1 > $nama_2 && $nama_2 < $nama_3 && $nama_1 > $nama_3){
			
            echo "$nama_2 <br>";
            echo "$nama_1 <br>";
            echo "$nama_3 <br>";
		}
		            //3>1>2
		else if($nama_1 < $nama_2 && $nama_2 > $nama_3 && $nama_1 > $nama_3){
            echo "$nama_3 <br>";
            echo "$nama_1 <br>";
            echo "$nama_2 <br>";
		}
		            //3>2>1
		else {
            echo "$nama_3 <br>";
            echo "$nama_2 <br>";
            echo "$nama_1 <br>";
		}
	}
}
?>
</body>
</html>
