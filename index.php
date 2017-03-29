<?php include "functions.php" ?>
<?php include "db.php" ?>

<?php
if (isset($_POST['enviar'])) {
  insert();
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Desafio Pokemon</title>
    <link rel="stylesheet" href="bootstrap.min.css" media="screen" title="no title">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <form class="col-md-6" action="index.php" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>

      <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" placeholder="Type">
      </div>

      <div class="form-group">
        <label for="type">Hp</label>
        <input type="text" class="form-control" name="hp" placeholder="HP">
      </div>

      <input type="submit" name="enviar" value="Enviar">
    </form>
  </body>
</html>
