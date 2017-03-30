<?php

function insert(){
  global $connection;
  $name = $_POST['name'];
  $typ = $_POST['type'];
  $hp = $_POST['hp'];
  $type = strtoupper($typ);

  $name = mysqli_real_escape_string($connection, $name);

  $query = "INSERT INTO pokemons(name,type,hp) VALUES ('$name', '$type', '$hp')";
  $resultado = mysqli_query($connection, $query);
  if (!$resultado) {
    die('Erro' . mysql_error($connection));
  }else{
    echo "Gravado com sucesso!";
  }
}

function select_fogo(){
  global $connection;
  $query = "SELECT * FROM pokemons WHERE type = 'FOGO' ";
  $resultado = mysqli_query($connection, $query);
  echo '<table class="table table-striped">';
  echo "<thead> <tr>  <th>Name</th> <th>Type</th> <th>Hp</th> </tr> </thead>";
  while($row = mysqli_fetch_assoc($resultado)){
    // print_r($row);
    echo '<tbody> <tr> <td>'.$row['name'].'</td> <td>'.$row['type'].'</td> <td>'.$row['hp'].'</td> </tr> </tbody>';
   }
   echo " </table";

  if (!$resultado) {
    die('Erro' . mysql_error($connection));
  }else{
    echo "Retorno";
  }
}

 ?>
