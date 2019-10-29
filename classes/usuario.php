<?php 
/**
 * 
 */
class Usuario
{
	
	private $pdo;

	function __construct(){
		try {
			$this->pdo= new PDO("mysql:dbname=reserva;host=localhost","root","");
		} catch (PDOException $e) {
			echo "Falhou: ".$e->getMessage();
		}
	}
}



?>