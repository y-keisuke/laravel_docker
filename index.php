<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laravel_Docker</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Laravel_Docker</h1>
<?php
  try {
      $dbh = new PDO('mysql:host=laravel_docker_db;dbname=laravel_docker', 'docker', 'docker');
      foreach($dbh->query('select * from laravel_docker') as $row) {
          echo 'DBに保存された値：' . $row['name'] . '<br>';
      }
      $dbh = null;
  } catch (PDOException $e) {
      echo $e;
      die();
  }
  $dbh = null;
?>
</body>
</html>