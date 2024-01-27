<?php
if(isset($_POST['submit'])){
    $year = $_POST['year'];
    $month = $_POST['month'];

    // Получение даты первого дня месяца
    $firstDay = date("Y-m-d", strtotime("first day of $year-$month"));

    // Получение даты последнего дня месяца
    $lastDay = date("Y-m-d", strtotime("last day of $year-$month"));

    // Вычисление количества целых недель в выбранном месяце
    $weeksCount = floor((strtotime($lastDay) - strtotime($firstDay)) / (60 * 60 * 24 * 7));

    // Вывод результата
    echo "Количество целых недель в выбранном месяце: $weeksCount<br>";

    // Определение дня недели для первого дня месяца
    $firstDayOfWeek = date("l", strtotime($firstDay));

    // Определение дня недели для последнего дня месяца
    $lastDayOfWeek = date("l", strtotime($lastDay));

    // Вывод результата
    echo "Первый день месяца: $firstDayOfWeek<br>";
    echo "Последний день месяца: $lastDayOfWeek<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Подсчет целых недель в месяце</title>
</head>
<body>
    <form method="POST" action="">
        <select name="year">
            <?php
            // Создание выпадающего списка с годами от 2010 до 2025
            for($i = 2010; $i <= 2025; $i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <select name="month">
            <?php
            // Создание выпадающего списка с месяцами
            $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
            foreach($months as $key => $value){
                $num = $key + 1;
                echo "<option value='$num'>$value</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Подсчитать">
    </form>
</body>
</html>
