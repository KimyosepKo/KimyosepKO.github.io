<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <input type="radio" name="s" value="tri" checked> 삼각형<br>
        <input type="radio" name="s" value="rect"> 직사각형<br>
        <input type="radio" name="s" value="circle"> 원<br>
        <input type="radio" name="s" value="box"> 직육면체<br>
        <input type="radio" name="s" value="cy"> 원통<br>
        <input type="radio" name="s" value="sphere"> 구<br><br>
        밑변: <input type="text" name="b"><br>
        높이: <input type="text" name="h"><br>
        가로: <input type="text" name="w"><br>
        세로: <input type="text" name="l"><br>
        반지름: <input type="text" name="r"><br>
        <input type="submit" value="계산">
    </form>
    <?php
    if(isset($_POST['s'])){
        $b=(float)$_POST['b']; $h=(float)$_POST['h']; $w=(float)$_POST['w']; 
        $l=(float)$_POST['l']; $r=(float)$_POST['r']; $PI=3.141592;
        if($_POST['s']=="tri") $res=$b*$h/2;
        elseif($_POST['s']=="rect") $res=$w*$l;
        elseif($_POST['s']=="circle") $res=round($PI*$r**2,2);
        elseif($_POST['s']=="box") $res=$w*$l*$h;
        elseif($_POST['s']=="cy") $res=round($PI*$r**2*$h,2);
        elseif($_POST['s']=="sphere") $res=round(4/3*$PI*$r**3,2);
        echo "<br>$res";
    }
    ?>
</body>
</html>