<?php
// Установка соединения с базой данных
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Запрос для получения списка таблиц в базе данных
$tables = array();
$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch_array()) {
    $tables[] = $row[0];
}

// Вывод таблиц и столбцов
foreach ($tables as $table) {
    echo "<h2>$table</h2>";
    $result = $conn->query("DESCRIBE $table");
    echo "<table>";
    echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['Field']."</td>";
        echo "<td>".$row['Type']."</td>";
        echo "<td>".$row['Null']."</td>";
        echo "<td>".$row['Key']."</td>";
        echo "<td>".$row['Default']."</td>";
        echo "<td>".$row['Extra']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Закрытие соединения с базой данных
$conn->close();
?>
