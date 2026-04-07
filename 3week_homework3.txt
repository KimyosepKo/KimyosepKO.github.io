<!DOCTYPE html>
<html>
<body>
    <form action="3week_homework3.php" method="post">
        input number: <input type="text" name="input_number"><br>
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['input_number'])) {
        $n = (int)$_POST['input_number'];
        $f = array();
        $f[1] = 1; $f[2] = 1;

        echo "<pre>i\tfi\tfi+1 / fi\n";
        for ($i = 1; $i <= $n; $i++) {
            if ($i > 2) $f[$i] = $f[$i-1] + $f[$i-2];
            $ratio = ($i == 1) ? 1 : ($f[$i] + $f[$i-1]) / $f[$i];
            echo "$i\t{$f[$i]}\t" . round($ratio, 6) . "\n";
        }
        echo "</pre>";
    }
    ?>
</body>
</html>