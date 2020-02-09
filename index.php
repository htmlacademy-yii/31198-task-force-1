<?
require_once "vendor/autoload.php";
use taskforse\Task;


echo "hello</br></br>";
$arrList = Task::TaskStatusList();
foreach ($arrList as $item) {
	echo $item;
	echo "</br>";
}
?>