<?php
require_once "conexion.php";
class pvcajamodal
{
	public function crearPuntoVentas($datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO puntoventa (nombre, monto, status) VALUES (:nombre, :monto, :status)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_INT);
		$stmt->bindParam(":status", $datos["status"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}
		$stmt->close();
		$stmt = null;
	}

	public function mostrarCajas(){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM puntoventa");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
	//-------------------------------------------
    // consultas para el historial de la caja
    //-------------------------------------------
	public function controlcaja($dato){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM historialcaja WHERE idcaja = $dato");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
	public function controlcajadatos($dato){
		$stmt = Conexion::conectar()->prepare("SELECT P.* FROM puntoventa as p inner join historialcaja as h on h.idcaja = p.id  WHERE p.id = $dato");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	public function controlcajausuario($dato){
		$stmt = Conexion::conectar()->prepare("SELECT u.* FROM usuarios as u inner join historialcaja as h on h.idusuario = u.id and h.idcaja = $dato");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	public function controlusuario($dato){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM puntoventa WHERE $dato ");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
	public function controlcajasession(){
		$stmt = Conexion::conectar()->prepare("SELECT u.* FROM usuarios as u inner join historialcaja as h on h.idusuario = u.id");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
 
}
 ?>