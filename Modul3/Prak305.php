<html>
<head>
<body>
    <form method ="POST" action="">
        <input type="text" name="string"> 
        <button type="submit">Submit</button>
    </form>
    <?php
        $string = NULL;
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['string'])){
                $string=$_POST['string'];
                echo "<h2>Input:</h2>";
                echo $string;
                echo "<h2>Output:</h2> ";
                for($i = 0 ; $i < strlen($string); $i++){
                    $katabesar = strtoupper($string);
                    echo $katabesar[$i];
        
                    for($j = 1 ; $j<strlen($string) ; $j++){
                        $katakecil = strtolower($string);
                        echo $katakecil[$i];
                    }   
                }
            }
        }
        
    ?>
</body>
</html>