<?php
class ci_historianeo extends historianeo_ci
{
	/* HISTORIANEO */
	function get_relacion()	
	{
		return $this->controlador->dep('datos');
		//la dep datos de su controlador (ci_padre)
	}
	//LISTADO
	function conf__listado_historianeo()
	{
		return $this->get_relacion()->tabla('historianeo')->get_filas(null, false);
		//obtiene las filas de la relacion previamente cargada
	}
	
	function evt__listado_historianeo__seleccion($seleccion){
		$this->get_relacion()->tabla('historianeo')->set_cursor($seleccion);
		//pone el cursor en la fila seleccionada de datos tabla (hay que indicarlo en el listad seleccionando Clave - datos_tabla)
	}
	
	//FORMULARIO
	function conf__frm_historianeo(toba_ei_formulario $form)
	{
		if ($this->get_relacion()->tabla('historianeo')->hay_cursor()) {
			return $this->get_relacion()->tabla('historianeo')->get();
		}
	}
	function evt__frm_historianeo__alta($datos){
		$this->get_relacion()->tabla('historianeo')->set($datos);
		$this->get_relacion()->sincronizar();
	}
	function evt__frm_historianeo__modificar($datos){
		$this->get_relacion()->tabla('historianeo')->set($datos);
		$this->get_relacion()->sincronizar();
	}	
	function evt__frm_historianeo__eliminar(){
		$cursor=$this->get_relacion()->tabla('historianeo')->get_cursor();
		$this->get_relacion()->tabla('historianeo')->eliminar_fila($cursor);
		$this->get_relacion()->sincronizar();
	}	
	function evt__frm_historianeo__volver($datos){
		$this->get_relacion()->resetear();
		$this->controlador->set_pantalla('pant_inicial');
	}	

}
?>