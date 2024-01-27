<!DOCTYPE html>
<html>
<head>
  <title>Работа с DOM на Javascript с применением Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Форма</h1>
    <div class="row">
      <div class="col-md-4">
        <label for="name">Имя:</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="col-md-4">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="col-md-4">
        <label for="role">Роль:</label>
        <select class="form-control" id="role">
          <option value="admin">Администратор</option>
          <option value="user">Пользователь</option>
          <option value="guest">Гость</option>
        </select>
      </div>
    </div>
    <br>
    <button class="btn btn-primary" onclick="addToTable()">Добавить в таблицу</button>

    <h2>Таблица</h2>
    <table id="dataTable" class="table table-striped">
      <thead>
        <tr>
          <th>Имя</th>
          <th>Email</th>
          <th>Роль</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script>
    function addToTable() {
      var name = $("#name").val();
      var email = $("#email").val();
      var role = $("#role").val();

      var newRow = "<tr><td>" + name + "</td><td>" + email + "</td><td>" + role + "</td></tr>";
      $("#dataTable").append(newRow);

      $("#name").val("");
      $("#email").val("");
    }
  </script>
</body>
</html>
