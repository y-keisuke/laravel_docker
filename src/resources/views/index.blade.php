@php
    $dbh = new PDO('mysql:host=laravel_docker_db;dbname=laravel_docker', 'docker', 'docker');
    foreach($dbh->query('select * from users') as $row) {
          echo 'DBに保存されたname：' . $row['name'] . '<br>';
          echo 'DBに保存されたemail：' . $row['email'] . '<br>';
          echo 'DBに保存されたpassword：' . $row['password'] . '<br>';
    }
@endphp
{{ $user }}
