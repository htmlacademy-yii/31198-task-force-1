<?
require_once "vendor/autoload.php";
use taskforse\Task2;


echo "hello</br></br>";
$arrList = Task2::TaskStatusList();
foreach ($arrList as $item) {
	echo $item;
	echo "</br>";
}
?>
