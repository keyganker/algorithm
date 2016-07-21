<?php
/**
 * Created by PhpStorm.
 * User: fey6779
 * Date: 2016/7/21
 * Time: 13:19
 */

class CalssLoader
{
	public static function loader($classname)
	{
		$class_file = $classname.".php";
		if (file_exists($class_file)){
			require_once($class_file);
		}
	}
}
// 方法为静态方法
spl_autoload_register('CalssLoader::loader');
$f = new Flexihash();
$f->addTarget('SSS');
var_dump($f->getAllTargets());