<?php
    // Configuration
		$mysql_host = 'localhost';
		$mysql_database = 'resetlab_scores';
		$mysql_user = 'resetlab_client';
		$mysql_password = 'rO1PKW6m+g75';
		
    try {
       $dbh = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);
    } catch(PDOException $e) {
        echo '<h1>An error has occurred.</h1><pre>', $e->getMessage() ,'</pre>';
    }

    $sth = $dbh->query('SELECT * FROM UsuariosVyV ORDER BY Puntuacion DESC LIMIT 3');
    $sth->setFetchMode(PDO::FETCH_ASSOC);

    $result = $sth->fetchAll();

    if(count($result) > 0) {
        foreach($result as $r) {
           # echo $r['Nombre'], "\t", $r['Puntuacion'], "\n";
            echo $r['Nombre'] .":". $r['Puntuacion'].":";
        }
    }

?>
