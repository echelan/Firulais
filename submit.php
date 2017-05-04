<?php

		$mysql_host = 'localhost';
		$mysql_database = 'firulaistest';
		$mysql_user = 'root';
		$mysql_password = '';
    echo "!!";
		try {
        	$dbh = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);
		}catch(PDOException $e) {
   			echo "Error!: " . $e->getMessage()."<br/>";
    		die();
		}

		$nombre = $_GET['first_name'];
    $apellido = $_GET['last_name'];
		$email = $_GET['email'];

		$sth = $dbh->prepare('INSERT INTO newsletter VALUES (NULL, :Nombre, :Apellido, :Email)');

  	 try {
     		$sth->execute(array(':Nombre' => $nombre, ':Apellido' => $apellido, ':Email' => $email));
				echo "Success". $nombre . $apellido;
  	} catch(Exception $e) {
  		 	echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
  	}

?>
