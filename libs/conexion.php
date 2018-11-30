<?php

require_once("config.php");

class Conexion{

public static $obj = null;
public $conn;

public function __construct(){
	$this->conn = mysqli_connect(SERVER,USER,PASS,DATABASE) or die("Error de conexion.");
}

public static function getConexion(){
	if (self::$obj == null) {
		self::$obj = new Conexion();
	}
	return self::$obj->conn;
}


	public function ejecutar($sql){
		$cx = self::getConexion();
		$query = mysqli_query($cx, $sql);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function consultar($sql){
		$cx = self::getConexion();
		$ResultSet = mysqli_query($cx, $sql);
		$resultado = array();
		while ($filas = mysqli_fetch_array($ResultSet)) {
			$resultado[] = $filas;
		}
		return $resultado;
	}

	public function login($user, $pass){
		$cx = self::getConexion();
		$sql = "SELECT * FROM usuarios WHERE usuario = '{$user}' AND clave = '{$pass}'";
		$query = mysqli_query($cx, $sql);
		$count = mysqli_num_rows($query);
		if ($count == 1) {

			$datos = mysqli_fetch_array($query);
			session_start();
			$_SESSION['id'] = $datos['id'];
			$_SESSION['user'] = $datos['usuario'];

			// header("Location: dentro.php");
			return true;
		}else{
			return false;
		}
	}



public function __destruct(){
	mysqli_close($this->conn);
}


}



?>