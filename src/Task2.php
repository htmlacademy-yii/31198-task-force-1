<?
namespace taskforse;
class Task2 {
	public const STATUS_NEW = 'new2';
	public const STATUS_PERFORM = 'performed2';
	public const STATUS_DONE = 'done2';
	public const STATUS_CANCEL = 'canceled2';
	public const STATUS_FAIL = 'failed2';

	public const ACTION_CREATE = 'create';
	public const ACTION_CANCEL = 'cancel';
	public const ACTION_RESPOND = 'respond';
	public const ACTION_ESTIMATE = 'estimate';

	public const ROLE_CUSTOMER = 'customer';
	public const ROLE_PERFORMER = 'performer';

	public static function TaskStatusList2() {
		return [
			self::STATUS_NEW,
			self::STATUS_PERFORM,
			self::STATUS_DONE,
			self::STATUS_CANCEL,
			self::STATUS_FAIL			
		];
	}

	public static function TaskActionList2() {
		return [
			self::STATUS_NEW,
			self::STATUS_PERFORM,
			self::STATUS_DONE,
			self::STATUS_CANCEL,
			self::STATUS_FAIL			
		];
	}
}
?>



