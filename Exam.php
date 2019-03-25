<?php


// 1.

// $arr=[1,2,3,4];

// echo N($arr);
// function N($arr){
// 	$result=[];
// 	$len=count($arr);

// 	for ($i=0; $i <$len ; $i++) { 
// 		for ($j=0; $j <$len ; $j++) { 
// 			for ($k=0; $k <$len ; $k++) { 
// 				if($arr[$i] !=$arr[$j] && $arr[$j]!=$arr[$k] && $arr[$i] !=$arr[$k]){
// 					$result[]=$arr[$i].$arr[$j].$arr[$k];
// 				}
// 			}
// 		}
// 	}

// 	var_dump($result);

// }



// Class Db{
// 	private static $instance = null;
// 	private static function __construct()
// 	{

// 	}

// 	private  static function __clone()
// 	{

// 	}

// 	public static function getInstance()
// 	{
// 		if(!(self::$instance instanceof Db)){
// 			self::$instance = new Db();
// 		}
// 		return self::$instance;
// 	}


// }




// $dir="D:\phpstudy\www\month11";

// echo A($dir);
// function A($dir){
// 	$into=opendir($dir);
// 	while (($file = readdir($into)) != false) {
// 		if($file =='.' || $file =='..'){
// 			continue;
// 		}else{
// 			$dirpath=$dir.'/'.$file;
// 			// var_dump($dirpath);
// 		}

// 		if(is_dir($dirpath)){
// 			A($dirpath);
// 		}else{
// 			echo $dirpath;
// 		}
// 	}
// }


$aPath="a/b/c/d/a.php";
$bPath="a/b/d/c/b.php";

echo findCommon($aPath,$bPath);
function findCommon($aPath,$bPath){
	$aPatharr= explode('/', $aPath);
	$bPatharr=	explode('/', $bPath);

	$result=[];


	// var_dump($aPatharr);
	// var_dump($bPatharr);


	$len=count($aPatharr)>count($bPatharr)?count($bPatharr)>count($aPatharr):count($aPatharr);
		
	for ($i=0; $i <$len ; $i++) { 
		$result[]=$aPatharr[$i].$bPatharr[$i];

	}


}

