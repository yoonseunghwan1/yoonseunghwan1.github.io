<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
        <title>
            PHPhomework1
        </title>
    </head>
<body>
    <h1>
        문제2
    </h1>
    <form method="POST" action="">
    값을 입력하세요 : <input type="number" name="num"/>
    <input type="submit" value="확인" />
</form>
<?php
    echo "Sorting 결과는 다음과 같읍니다.   ";
    if(isset($_POST["num"])){
    $n = $_POST["num"];
    $data = array();
    for ($i = 0; $i < $n; $i++) {
        $data[] = rand(10, 100);
    }
    sort($data);
    
    for ($i = 0; $i < count($data); $i++) {
        echo $data[$i]." ";
    }
}
?>
</body>
</html>


