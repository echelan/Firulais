<?php

		$mysql_host = 'localhost';
		$mysql_database = 'resetlab_scores';
		$mysql_user = 'resetlab_client';
		$mysql_password = 'rO1PKW6m+g75';

		try {
        	$dbh = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);
		}catch(PDOException $e) {
   			echo "Error!: " . $e->getMessage()."<br/>";
    		die();
		}

		$nombre = $_GET['nombre'];
		$email = $_GET['email'];
  	$celular = $_GET['celular'];
		$fechanacimiento = $_GET['fechanacimiento'];
		$lugarpreferencia = $_GET['lugarpreferencia'];
		$puntuacion = $_GET['puntuacion'];

		$sth = $dbh->prepare('INSERT INTO UsuariosVyV VALUES (NULL, :Nombre, :Email, :Celular, :FechaDeNacimiento , :LugarDePreferencia, :Puntuacion)');

  	 try {
     		$sth->execute(array(':Nombre' => $nombre, ':Email' => $email, ':Celular' => $celular,':FechaDeNacimiento' => $fechanacimiento,':LugarDePreferencia' => $lugarpreferencia,':Puntuacion' => $puntuacion));
				echo "Success". $nombre . $email;
  	} catch(Exception $e) {
  		 	echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
  	}

?>
