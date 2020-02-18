<?
namespace taskforse;
class Task2 {
	public const STATUS_NEW = 'new2';
	public const STATUS_PERFORM = 'performed2';
	public const STATUS_DONE = 'done2';
	public const STATUS_CANCEL = 'canceled2';
	public const STATUS_FAIL = 'failed2';

	public const ACTION_CANCEL = 'cancel'; //отменить
	public const ACTION_RESPOND = 'respond'; //откликнуться
	public const ACTION_COMPLETE = 'complete'; //выполнить
	public const ACTION_REFUSE = 'refuse'; //отказаться

	public const ROLE_CUSTOMER = 'customer';
	public const ROLE_PERFORMER = 'performer';

	public static function taskStatusList():array 
	{
		return [
			self::STATUS_NEW,
			self::STATUS_PERFORM,
			self::STATUS_DONE,
			self::STATUS_CANCEL,
			self::STATUS_FAIL			
		];
	}

	public static function taskActionList():array 
	{
		return [
			self::ACTION_CANCEL,
			self::ACTION_RESPOND,
			self::ACTION_COMPLETE, 
			self::ACTION_REFUSE
		];
	}
}
?>



