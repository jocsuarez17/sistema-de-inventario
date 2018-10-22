<?php 

class pvcajacontroller
{
	/*=============================================
	MOSTRAR PUNTOS DE VENTAS
	=============================================*/
	public function mostrarCajas(){
		$resultado = pvcajamodal::mostrarCajas();
		return $resultado;
	}
    /*=============================================
	CRAR PUNTO DE VENTAS
	=============================================*/
	public function crearPuntoVentas(){

		if (isset($_POST["nuevopunto"])) {

		$datos = array( 	   "nombre"=>$_POST["nuevopunto"],
					           "monto"=>$_POST["nuevomonto"], 
					           "status"=>"Cerrado" );

		$respuesta = pvcajamodall::crearPuntoVentas($datos);

		if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El punto de venta ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "puntodeventa";

									}
								})

					</script>';


			}elseif ($respuesta == "error"){

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El punto de venta no se pudo crear!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "puntodeventa";

							}
						})

			  	</script>';



			}

		}
	}
	
    /*=============================================
	EDITAR PUNTO DE VENTAS
	=============================================*/
	public function editarPuntoVentas(){

		/*$datos = array("id"=>$_POST["idCliente"],
			   				   "nombre"=>$_POST["editarCliente"],
					           "documento"=>$_POST["editarDocumentoId"],
					           "email"=>$_POST["editarEmail"],
					           "telefono"=>$_POST["editarTelefono"],
					           "direccion"=>$_POST["editarDireccion"],
					           "fecha_nacimiento"=>$_POST["editarFechaNacimiento"]);

		puntaventasmodel::editarPuntoVentas($datos);*/
	}
	 /*=============================================
	ELIMINAR PUNTO DE VENTAS
	=============================================*/
	public function eliminarPuntoVentas(){

		/*$datos = array("id"=>$_POST["idCliente"],
			   				   "nombre"=>$_POST["editarCliente"],
					           "documento"=>$_POST["editarDocumentoId"],
					           "email"=>$_POST["editarEmail"],
					           "telefono"=>$_POST["editarTelefono"],
					           "direccion"=>$_POST["editarDireccion"],
					           "fecha_nacimiento"=>$_POST["editarFechaNacimiento"]);

		puntaventasmodel::editarPuntoVentas($datos);*/
	}

/*=============================================
	CRAR PUNTO DE VENTAS
=============================================*/
	public function controlcaja(){

		if (isset($_GET["valor"])) {

		$id = $_GET["valor"];

		$respuesta = pvcajamodal::controlcaja($id);
		return $respuesta;
	}
}

public function controlcajadatos(){

		if (isset($_GET["valor"])) {

		$id = $_GET["valor"];


		$respuesta2 = pvcajamodal::controlcajadatos($id);

		return $respuesta2;

	}
}

public function controlcajausuario(){

		if (isset($_GET["valor"])) {

		$id = $_GET["valor"];

		$respuesta3 = pvcajamodal::controlcajausuario($id);

		return $respuesta3;	
	}
}

/*=============================================
	validacion caja 
=============================================*/
	public function controlusuario(){

		$respuesta = pvcajamodal::controlusuario();	
	}
	public function controlcajasession(){

		$respuesta = pvcajamodal::controlcajasession();

		return $respuesta;	
	}


}
?>