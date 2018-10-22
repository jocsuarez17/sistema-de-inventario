<?php

require_once "conexion.php";

class Modeloproveedor{

	/*=============================================
	CREAR  PROVEEDOR
    =============================================*/
    static public function crearproveedor($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO proveedor(nit, empresa, telefono, direccion, asesor, cedula) VALUES (:nit, :empresa, :telefono, :direccion, :asesor, :cedula)");

        $stmt->bindParam(":nit", $datos["nit"], PDO::PARAM_STR);
		$stmt->bindParam(":empresa", $datos["empresa"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":asesor", $datos["asesor"], PDO::PARAM_STR);
		$stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);

		
		if($stmt->execute()){

			return "ok";

		}else{
			
			return "error";
		}
        

			

		$stmt->close();
		$stmt = null;

	}
    /*=============================================
	MOSTRAR proveedor
	=============================================*/

	static public function mdlMostrarProveedor($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		
			$stmt -> execute();

			return $stmt -> fetchAll();
		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR PROVEEDOR
	=============================================*/

	static public function mdlEditarProveedor($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla set empresa = :empresa, nit = :nit, cedula = :cedula, telefono = :telefono, direccion = :direccion, asesor = :asesor WHERE id= :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nit", $datos["nit"], PDO::PARAM_INT);
		$stmt->bindParam(":empresa", $datos["empresa"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":asesor", $datos["asesor"], PDO::PARAM_STR);
		$stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR PROVEEDOR
	=============================================*/

	static public function mdlEliminarProveedor($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR PROVEEDOR
	=============================================*/

	static public function mdlActualizarProveedor($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}