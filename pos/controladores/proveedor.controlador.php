<?php

class Controladorproveedor{

	/*=============================================
	CREAR PROVEEDOR
	=============================================*/
	
    static public function ctrMostrarProveedor($item, $valor){

		$tabla = "proveedor";

		$respuesta = Modeloproveedor::mdlMostrarProveedor($tabla, $item, $valor);

		return $respuesta;

	}
	/*=============================================
	
	=============================================*/
	static public function crearproveedor(){
		
	if(isset($_POST["nuevaEmpresa"])){

		/*if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaEmpresa"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoNit"]) && 
			   preg_match('/^[0-9]+$/', $_POST["nuevaCedula"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDireccion"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevoAsesor"])){*/

			$tabla="proveedor";

		$datos = array("nit"=>$_POST["nuevoNit"],
		"empresa"=>$_POST["nuevaEmpresa"],
		"telefono"=>$_POST["nuevoTelefono"],
		"direccion"=>$_POST["nuevaDireccion"],
		"asesor"=>$_POST["nuevoAsesor"],
		"cedula"=>$_POST["nuevaCedula"]);

		//print_r($datos);
	     //echo "hola";
		$respuesta = Modeloproveedor::crearproveedor($tabla, $datos);
        //return  $respuesta;
		if($respuesta == "ok"){

			echo'<script>

			swal({
				  type: "success",
				  title: "El cliente ha sido guardado correctamente",
				  showConfirmButton: true,
				  confirmButtonText: "Cerrar"
				  }).then(function(result){
							if (result.value) {

							window.location = "crear-venta";

							}
						})

			</script>';

		}

		/*}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "proveedor";

							}
						})

			  	</script>';



			}*/

		}

	}

	/*=============================================
	MOSTRAR PROVEEDOR
	=============================================
	static public function mdlproveedor(){

		$tabla = "proveedor";

		$respuesta = Modeloproveedor::mdlMostrarProveedor();

		return $respuesta;

	}*/

	/*=============================================
	EDITAR PROVEEDOR
	=============================================*/

	static public function ctrEditarProveedor(){

		if(isset($_POST["editarProveedor"])){
			
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarempresa"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nitproveedor"]) && 
			   preg_match('/^[0-9]+$/', $_POST["editarcedula"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editardireccion"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editartelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarasesor"])){
			   	
			   	$tabla = "proveedor";

			   	$datos = array("id"=>$_POST["idProveedor"],
			   				   "nit"=>$_POST["nitproveedor"],
			   				   "empresa"=>$_POST["editarempresa"],
					           "telefono"=>$_POST["editartelefono"],
					           "direccion"=>$_POST["editardireccion"],
					           "asesor"=>$_POST["editarasesor"],
					           "cedula"=>$_POST["editarcedula"]);
					           

				$respuesta = Modeloproveedor::mdlEditarProveedor($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  })
									window.location = "proveedor";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "proveedor";

							}
						})

			  	</script>';



			}

		}
}
	
	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarProveedor(){

		if(isset($_GET["nitproveedor"])){

			$tabla ="proveedor";
			$datos = $_GET["nitproveedor"];

			$respuesta = Modeloproveedor::mdlMostrarProveedor($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El cliente ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "clientes";

								}
							})

				</script>';

			}		

		}

	}

}


