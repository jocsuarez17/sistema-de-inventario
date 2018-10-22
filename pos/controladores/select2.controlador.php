<?php 
require_once "modelos/select2.modelo.php";
class select2controller
{
    public function selectCatWithAll()
    {
  		$resultado = select2model::selectCatWithAll();
		echo $resultado;
    }

}


?>