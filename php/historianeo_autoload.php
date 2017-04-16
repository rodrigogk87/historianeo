<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class historianeo_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'historianeo_ci' => 'extension_toba/componentes/historianeo_ci.php',
		'historianeo_cn' => 'extension_toba/componentes/historianeo_cn.php',
		'historianeo_datos_relacion' => 'extension_toba/componentes/historianeo_datos_relacion.php',
		'historianeo_datos_tabla' => 'extension_toba/componentes/historianeo_datos_tabla.php',
		'historianeo_ei_arbol' => 'extension_toba/componentes/historianeo_ei_arbol.php',
		'historianeo_ei_archivos' => 'extension_toba/componentes/historianeo_ei_archivos.php',
		'historianeo_ei_calendario' => 'extension_toba/componentes/historianeo_ei_calendario.php',
		'historianeo_ei_codigo' => 'extension_toba/componentes/historianeo_ei_codigo.php',
		'historianeo_ei_cuadro' => 'extension_toba/componentes/historianeo_ei_cuadro.php',
		'historianeo_ei_esquema' => 'extension_toba/componentes/historianeo_ei_esquema.php',
		'historianeo_ei_filtro' => 'extension_toba/componentes/historianeo_ei_filtro.php',
		'historianeo_ei_firma' => 'extension_toba/componentes/historianeo_ei_firma.php',
		'historianeo_ei_formulario' => 'extension_toba/componentes/historianeo_ei_formulario.php',
		'historianeo_ei_formulario_ml' => 'extension_toba/componentes/historianeo_ei_formulario_ml.php',
		'historianeo_ei_grafico' => 'extension_toba/componentes/historianeo_ei_grafico.php',
		'historianeo_ei_mapa' => 'extension_toba/componentes/historianeo_ei_mapa.php',
		'historianeo_servicio_web' => 'extension_toba/componentes/historianeo_servicio_web.php',
		'historianeo_comando' => 'extension_toba/historianeo_comando.php',
		'historianeo_modelo' => 'extension_toba/historianeo_modelo.php',
	);
}
?>