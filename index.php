<?
include 'src/task.php';
use taskforse\Task;

$list_status = Task::taskStatusList();
$list_action = Task::taskActionList();

foreach($list_status as $item) {
    echo $item.'<br>';
}
echo "<br> <br>";

foreach($list_action as $item) {
    echo $item.'<br>';
}

?>


