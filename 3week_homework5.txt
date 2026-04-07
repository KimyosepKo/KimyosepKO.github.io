<!DOCTYPE html>
<html>
<body>
    <form action="3week_homework5.php" method="post">
        년도를 입력하세요 : <input type="text" name="y" /><br />
        월을 입력하세요 : <input type="text" name="m" /><br />
        <input type="submit" value="확인" />
    </form>

    <?php
    if(!empty($_POST['y']) && !empty($_POST['m'])) {
        $y = (int)$_POST["y"];
        $m = (int)$_POST["m"];

        if(checkdate($m, 1, $y)) {
            $firstweekday = date("w", mktime(0, 0, 0, $m, 1, $y)); 
            
            $lastday = date("t", mktime(0, 0, 0, $m, 1, $y)); 
            
            $fc = ceil(($firstweekday + $lastday) / 7); 
            $count = $fc * 7; 
            $j = 1;

            echo "<table border='1' width='500'>";
            echo "<tr align='center'><td colspan='7'>". $y."년 ".$m."월</td></tr>";
            echo "<tr align='center'><td>일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td>토</td></tr>";

            for($i = 1; $i <= $count; $i++) {
                if($i % 7 == 1) {
                    echo "<tr align='right'>";
                }

                echo "<td>";
                if($i > $firstweekday && $j <= $lastday) {
                    echo $j;
                    $j++;
                } else {
                    echo "&nbsp;";
                }
                echo "</td>";

                if($i % 7 == 0) {
                    echo "</tr>";
                }
            }
            echo "</table>";
        } else {
            echo "<script>alert('올바른 날짜 형식을 입력하시오');</script>";
        }
    }
    ?>
</body>
</html>