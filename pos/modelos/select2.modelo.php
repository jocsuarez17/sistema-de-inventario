<?php
require_once "conexion.php";
class select2model
{
    public function selectCatWithAll()
  {
  	$stmt = Conexion::conectar()->prepare("SELECT id,nombre FROM clientes");
  	$stmt->execute();
  	$cat = $stmt -> fetchAll();
  	$text = '
  	<select class="select2" name="selectCatWithAll" style="width:300px;" id="concept" >
			 	<option disabled value="0" selected>Seleccione Un cliente</option>';
  	foreach ($cat as $key => $value)
  	{
  		$text .= '<option value="'.$value["id"].'">
  					'.$value["nombre"].'
			 	  </option>';
  	}
  	$text .= '</select>
  	<script>
		$(document).ready(function() 
		{
		    $(".select2").select2();
		});
	</script>';
  	return $text;
  }
}
?>