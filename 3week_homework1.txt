<!DOCTYPE html>
<html>
<body>
    <form action="3week_homework1.php" method="post">
        input number: <input type="text" name="input_number"><br>
        <input type="submit">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input_number'])) {
        $n = (int)$_POST['input_number'];
        $even_sum = 0; $odd_sum = 0;

        echo "<h3>input number: $n</h3>";

        echo "sum of even number less than $n: ";
        for ($i = 0; $i <= $n; $i++) {
            if ($i % 2 == 0) {
                $even_sum += $i;
                echo $i;
                echo ($i + 2 <= $n) ? " + " : " = ";
            }
        }
        echo "$even_sum <br>";

        echo "sum of odd number less than $n: ";
        for ($i = 0; $i <= $n; $i++) {
            if ($i % 2 != 0) {
                $odd_sum += $i;
                echo $i;
                echo ($i + 2 <= $n) ? " + " : " = ";
            }
        }
        echo "$odd_sum";
    }
    ?>
</body>
</html>