<?php
use App\Lib1\MyClass1 as MC1;
use App\Lib1\MyClass2 as MC2;

use App\Lib1\MyClass3 as MC3;

//require_once("App\Lib1\MyClass1.php");

//echo \App\Lib1\MYCONST . "\n";

$obj1 = new MC1();
echo $obj1->test();

echo '<br/>';
$obj2 = new MC2();
echo $obj2->test();


echo '<br/>';
$obj3 = new MC3();
echo $obj3->test();

function __autoload($class) {
	// convert namespace to full file path
	$class = str_replace('\\', '/', $class) . '.php';
	require_once($class);
}
/*
Output:
return test function myclass1
return test function myclass2
return MyClass3 test..
*/
?>