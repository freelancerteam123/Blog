<?php 
/*
    |--------------------------------------------------------------------------
    | Custom Util Helper
    |--------------------------------------------------------------------------
    |
    | Create custom util helper to support more function for project
    |
    */

namespace App\Helpers;

class UtilHelper {
	public static function getPublicPath () {
		return public_path();
	}
}

?>