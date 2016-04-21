<?php
	function smarty_function_test($params){
		print_r($params);
		exit;
		/*
		$width = $params['width'];
		$height = $params['height'];
		$area = $width*$height;*/
		return $area;
	}
?>