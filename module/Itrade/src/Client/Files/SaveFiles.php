<?php

namespace Client\Files;


Class SaveFiles
{
	//Funcion que valida los archivos de el area de cliente
	public function validateFile($file)
	{
		//Variable para mandar el resultado de la validación
		$result = "";
		
		//definicion de los formatos permitidos
		$formats = array
	       	(
				"pdf",
				"doc",
				"docx"
			);

		//Variables de apoyo para validación
		$formatoCorrecto 	= false;
		$tamañoCorrecto 	= false;

		//Obtenemos el tipo de archivo
		$file_type = explode('/', $file['type']);
        $file_type = $file_type[1];
        //Obtenemos el tamaño del archivo
        $file_size = $file['size'];

        if($file_size > 0)
        {
	        for ($i=0; $i < count($formats) ; $i++) 
	        {
	        	if($file_type == $formats[$i])
	        		$formatoCorrecto = true;

	        }
	        if($formatoCorrecto == false)
	        	$result = $result.'El archivo '.$file['name'].' tiene un formato no soportado<br>';
		}

		return $result;
	}

	public function saveFile($url,$file,$name)
	{
		$file_type = explode('/', $file['type']);
		$file_type = $file_type[1];
		if($file_type != '')
			copy($file['tmp_name'], $url.$name.'.'.$file_type);
	}

	public function getType($file)
	{
		$file_type = explode('/', $file['type']);
        $file_type = $file_type[1];
        return $file_type;
	}
}