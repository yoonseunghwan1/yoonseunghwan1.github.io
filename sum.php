<!DOCTYPE html>
<html>
<head>
    <title>even odd number sum</title>
</head>
<body>
    <form method="post" action="">
        <label>input number :</label>
        <input type="number" name="num" id="num" required>
        <input type="submit" value="ok!">
    </form>
    <?php
        if(isset($_POST['num'])){
            $num = $_POST['num'];
            $sum_even = 0;
            $sum_odd = 1;
            echo "sum of even number less than $num : ";
            for($i=0;$i<$num;$i+=2){
                if($i==0){
                    echo "0";
                }
                else{
                    echo " + $i ";
                    $sum_even+=$i;
                }
            }   
            if($sum_even>=$num){
                echo "= $sum_even";
            }
            echo "<br>";
            echo "sum of odd number less than $num: ";
            for($i=1;$i<$num;$i+=2){
                if($i==1){
                    echo "1";
                }
                else{
                    echo " + $i";
                    $sum_odd+=$i;
                }
            }    
            if($sum_odd>=$num){
                echo "= $sum_odd";
                }
         }   
        
    ?>
    
    </body>
</html>
