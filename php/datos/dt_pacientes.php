<?php
class dt_pacientes extends historianeo_datos_tabla
{
	function get_listado()
	{
		$sql = "SELECT
			*
		FROM
			pacientes 
		ORDER BY apellido asc";
		return toba::db('historianeo')->consultar($sql);
	}

}

?>