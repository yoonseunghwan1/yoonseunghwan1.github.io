<?php
$link = mysqli_connect("localhost", 'root', '','amusementpark');
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");
$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>amusementpark</title>
        <style>
            .input-wrap {
                width: 960px;
                margin: 0 auto;
            }
            h1 { text-align: center; }
        
            th, td { text-align: center; }
            
            table {
                border: 1px solid #000;
                margin: 0 auto;
                width: 80%;
                margin-bottom:3%;
            }
            td, th {
                border: 1px solid #ccc;
            }
            a { text-decoration: none; }
            .formclass {
                margin-left: 10%;  
            }
            .formclass input[type="text"] {
                width: 80px; 
                height: 20px; 
                padding: 5px; 
                font-size: 16px; 
            }
            .formclass input[type="submit"] {
                float: right;
                margin-right:12%;
            }
            .result{
                margin-left:10%;
            }
        </style>
    </head>
        <body>
            <div class="input-wrap">
                <div class = "formclass">
                    <form action="amusementpark" method="POST">
                    <label for="name">고객성명 </label>
                    <input type="text" id="name" name="name">
                    <input type="submit" name="submit" value="합계">
                </div>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>구분</th>
                        <th colspan="2">어린이 </th>                      
                        <th colspan="2">어른</th>                      
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>입장권</td>
                        <td>7,000</td>
                        <td> 
                            <select name="num_ch">
                                <option value="0" selected="true">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>10,000</td>
                        <td>
                            <select name="num_ad">
                                <option value="0" selected="true">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>입장</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BiG3</td>
                        <td>12,000</td>
                        <td> 
                            <select name="big3_ch">
                                <option value="0" selected="true">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>16,000</td>
                        <td>
                            <select name="big3_ad">
                                <option value="0" selected="true">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>입장+놀이3종</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>자유이용권</td>
                        <td>21,000</td>
                        <td> 
                            <select name="free_ch">
                                <option value="0" selected="true">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>26,000</td>
                        <td>
                            <select name="free_ad">
                                <option value="0" selected="true">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>입장+놀이자유</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>연간이용권</td>
                        <td>70,000</td>
                        <td> 
                            <select name="an_ch">
                                <option value="0" selected="true">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            </select>
                        </td>
                        <td>90,000</td>
                        <td>
                            <select name="an_ad">
                                <option value="0" selected="true">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>입장+놀이자유</td>
                    </tr>
                </tbody>
            </table>
        </form>
            <?php
                if (isset($_POST['name']) == true ) {
                    if (isset($_POST['submit']) && $_POST['submit'] == "합계") {
                        $sum = ($_POST['num_ch'] * 7000) + ($_POST['num_ad'] * 10000) + ($_POST['big3_ch'] * 12000)  + ($_POST['big3_ad'] * 16000) + ($_POST['free_ch'] * 21000) + ($_POST['free_ad'] * 26000) + ($_POST['an_ch'] * 70000) + ($_POST['an_ad'] * 90000);    
                        $sql="INSERT INTO  `customer` ".     
                        "(`name` , `num_ch` , `num_ad` , `big3_ch` , `big3_ad` , `free_ch` , `free_ad` , `an_ch` ,`an_ad`,`sum`)".
                        "VALUES ('$_POST[name]', '$_POST[num_ch]',  '$_POST[num_ad]',  '$_POST[big3_ch]',  '$_POST[big3_ad]',  '$_POST[free_ch]','$_POST[free_ad]','$_POST[an_ch]','$_POST[an_ad]','$sum')";     
                        }
                        mysqli_query($link,$sql);
                        
                    } 
            ?>
        <div class="result">
            <?php 
                $am_pm = (date("A") == 'AM') ? '오전' : '오후';
                $time = date("h:i:s");
                echo date("Y") . "년 " . date("m") . "월 " . date("d") . "일" ." ". $am_pm . " " . $time;
                echo "<br>";
            ?>
            <?php 
                    if (isset($_POST['name']) == true ) {
                        if (isset($_POST['submit']) && $_POST['submit'] == "합계") {
                    echo "{$_POST['name']} 고객님 감사합니다.<br>";
                    if ($_POST['num_ch']>=1){
                        echo "어린이 입장권 {$_POST['num_ch']}매 <br>";
                    }
                    elseif ($_POST['num_ad']>=1){
                        echo "어른 입장권 {$_POST['num_ad']}매 <br>";
                    }
                    if ($_POST['big3_ch']>=1){
                        echo "어린이 BIG3 {$_POST['big3_ch']}매 <br>";
                    }
                    elseif ($_POST['big3_ad']>=1){
                        echo "어른 BIG3 {$_POST['big3_ad']}매 <br>";
                    }
                    if ($_POST['free_ch']>=1){
                        echo "어린이 자유이용권 {$_POST['free_ch']}매 <br>";
                    }
                    elseif ($_POST['free_ad']>=1){
                        echo "어른 자유이용권 {$_POST['free_ad']}매 <br>";
                    }
                    if ($_POST['an_ch']>=1){
                        echo "어린이 연간이용권 {$_POST['an_ch']}매 <br>";
                    }
                    elseif ($_POST['an_ad']>=1){
                        echo "어른 연간이용권 {$_POST['an_ad']}매 <br>";
                    }
                    echo "합계: {$sum}원입니다.<br>";
                }
            }
                    
        ?>

        </div>                
    </div>
    </body>
</html>



