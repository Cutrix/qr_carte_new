<?php 

namespace Engine;

class Util {

	public function getView($viewName) 
	{
		$this->_get($viewName, 'View');		
	}

	public function getModel($modelName)
	{
		$this->_get($modelName, 'Model');
	}

	public function _get($fileName, $type)
	{
		$fullPath = ROOT_PATH.$type.'/'.$fileName.'.php';
		if (is_file($fullPath))
			require $fullPath;
		else 
			exit('le fichier specifie: "'.$fullPath.'" n\'existe pas');
	}

	public function __set($key, $val)
	{
		$this->$key = $val;
	}
}
