<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'dawidgrzegorzek';
    $port = 3306;
    

    $polaczenie = @new Mysqli($host,$user,$password,$dbname,$port);

    if(mysqli_connect_errno()!=0){
        echo "Błąd polaczenia z bazą danych";
    }else{
        echo "Polaczono z bazą";
    }
?>