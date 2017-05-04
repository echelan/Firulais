<?php 
ini_set('allow_url_fopen',1);
		#$mysql_host = 'localhost';
		#$mysql_database = 'resetlab_scores';
		#$mysql_user = 'resetlab_client';
		#$mysql_password = 'rO1PKW6m+g75';
		#$mysql_database = 'score';
		#$mysql_user = 'clientApp';
		#$mysql_password = 'admin';
		#try {
        	#$dbh = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);
		#}catch(PDOException $e) {
   		#	echo "Error!: " . $e->getMessage()."<br/>";
    		#die();
		#}	
  	
		$telefono = $_GET['telefono'];
		$alias = $_GET['alias'];
        	$hash = $_GET['hash'];
       		$secretKey="asdasd";
		$url = "http://72.32.191.82/appterror/registrar.php?";
        	$res = file_get_contents($url."telefono=$telefono&alias=$alias&hash=$hash");
        	echo $res;

 		#if($hash == $secretKey) { 
	#$sth = $dbh->prepare('INSERT INTO usuarios VALUES (NULL, :telefono, :alias, 0, 0,"0000-00-00")');
         #try {
         #$sth->execute(array(':telefono' => $telefono, ':alias' => $alias));
	#			echo "Success". $telefono . $alias;
          #  } catch(Exception $e) {
         #       echo '<h1>An error has ocurred.</h1><pre>', $e->getMessage() ,'</pre>';
         #   }	
       # } else{
	#		 echo "Error de hash diferentes";
	#	}
?>