<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
        <title>
            PHPhomework1-3
        </title>
    </head>
<body>
    <h1>
        문제3 Fibonacci
    </h1>
    <form method="POST" action="">
    값을 입력하세요 : <input type="number" name="num"/>
    <input type="submit" value="확인" />
</form>
<?php
    $prev =1.0;
    $curr = 1.0;
    if(isset($_POST["num"])){
        $n = $_POST["num"];
        for ($i = 1; $i <= $n; $i++) {
            if($i==2){
                echo "$i, $prev, ";
            }
            else{
                echo "$i, $curr, " ;
            }    
        $ratio = $curr/$prev;
        echo $ratio;       
        echo "<br>";
        $next = $prev + $curr; //fi+1 +fi
        $prev = $curr;         //fi
        $curr = $next;         
        }
    }
    
?>
</body>
</html>


