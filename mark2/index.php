<!DOCTYPE html>
<html>
<head>
    <title>Обработка целых чисел</title>
</head>
<body>
    <form method="post">
        <input type="text" name="firstNumber" placeholder="Введите первое число" required><br>
        <select name="secondNumber">
            <?php
                for ($i = 1999; $i <= 2055; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select><br>
        <button type="submit" name="submit">Обработать</button>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $firstNumber = $_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];

            $average = ($firstNumber + $secondNumber) / 2;
            $product = $firstNumber * $secondNumber;
            
            $count = 0;
            for ($i = min($firstNumber, $secondNumber) + 1; $i < max($firstNumber, $secondNumber); $i++) {
                if ($i % 10 == 0) {
                    $count++;
                }
            }

            echo "<br>";
            echo "Среднее значение: " . $average . "<br>";
            echo "Произведение чисел: " . $product . "<br>";
            echo "Количество чисел, делящихся нацело на 10: " . $count;
        }
    ?>
</body>
</html>
