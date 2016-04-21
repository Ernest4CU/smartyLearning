<?php
	function smarty_modifier_test($utime,$format){
		$format=(!empty($format))?$format:'Y-m-d H:i:s';
		return date($format,$utime);
	}
?>