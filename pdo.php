<?php
    $host = 'localhost';
    $port = 3306;
	$user = 'root';
	$password = '';
	$dbname = 'dawidgrzegorzek';
	

try{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port.";charset=utf8",$user,$password);
    echo "Polaczono z bazą";
}catch(PDOException $e){
    echo "Błąd z polaczeniem";
    die();
}
?>