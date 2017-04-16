<?php
class ci_pacientes extends historianeo_ci
{
	/* PACIENTES */
	
	//LISTADO
	function conf__listado_pacientes()
	{
		return $this->dep('datos')->tabla('pacientes')->get_listado();
		//va a la base de datos a bsucar la lista de pacientes
	}
	function evt__listado_pacientes__seleccion($datos){
		$this->dep('datos')->tabla('pacientes')->cargar($datos); 
		//carga la datos_tabla por medio de un id, yaque definimos datostabla de 1,1 y el cursor lo posiciona solo
	}
	function evt__listado_pacientes__historianeo($datos){
		$this->dep('datos')->cargar($datos); 
		//carga la relacion con los datos pasados (todas las tablas de la relacion, debe recibir los id)
		$this->set_pantalla('pant_historianeo');
	}
	
	//FORMULARIO
	function conf__frm_pacientes(toba_ei_formulario $form)
	{
		if ($this->dep('datos')->tabla('pacientes')->esta_cargada()) {
			$form->set_datos($this->dep('datos')->tabla('pacientes')->get());
		}
	}
	function evt__frm_pacientes__alta($datos){
		$this->altamodpacientes($datos);
	}
	function evt__frm_pacientes__modificar($datos){
		$this->altamodpacientes($datos);
	}
	
	//PrIVATE FUNCTiONS
	private function altamodpacientes($datos)
	{
		$this->dep('datos')->tabla('pacientes')->set($datos); 
		//lo carga en memoria (datos_tabla)
		$this->dep('datos')->tabla('pacientes')->sincronizar(); 
		//lo sincroniza con la db
		$this->dep('datos')->tabla('pacientes')->resetear(); 
		//pone la memoria de datos_tabla en vacio
		
	}
	
}
?>