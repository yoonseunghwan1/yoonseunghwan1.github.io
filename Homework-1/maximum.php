<!DOCTYPE html>
<html>
<head>
    <title>even odd number</title>
</head>
<body>
    <h1> </h1>
    <form method="post" action="">
        <label>input number:</label>
        <input type="number" name="num" id="num" required>
        <input type="submit" value="계산" >
    </form>
    
    <?php
        if(isset($_POST['num'])){
            $num = $_POST['num'];
            $max=0;
            $data=array();
            echo"<p> random numbers: ";
            for($i=0;$i<$num;$i++){
                $data[] = rand(10,100);
                echo"$data[$i] ";
                if($data[$i]>=$max){
                    $max=$data[$i];
                }
            }
            echo "</P>";
            echo"<p> maximum = $max </p>";
        }
    ?>

</body>
</html>
