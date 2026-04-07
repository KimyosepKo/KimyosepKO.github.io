<!DOCTYPE html>
<html>
<body>
    <form action="3week_homework2.php" method="post">
        input number: <input type="text" name="input_number"><br>
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['input_number'])) {
        $n = (int)$_POST['input_number'];
        $arr = array();
        $max = 0;

        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = rand(10, 100);
            echo $arr[$i] . " ";
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
        }
        echo "<br>maximum = $max";
    }
    ?>
</body>
</html>