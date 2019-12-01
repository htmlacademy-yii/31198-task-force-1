
class Task {
	public const STATUS_NEW = 'new';
	public const STATUS_PERFORM = 'performed';
	public const STATUS_DONE = 'done';
	public const STATUS_CANCEL = 'canceled';
	public const STATUS_FAIL = 'failed';

	public const ACTION_CREATE = 'create';
	public const ACTION_CANCEL = 'cancel';
	public const ACTION_RESPOND = 'respond';
	public const ACTION_ESTIMATE = 'estimate';

	public const ROLE_CUSTOMER = 'customer';
	public const ROLE_PERFORMER = 'performer';

	public static function TaskStatusList() {
		return [
			self::STATUS_NEW,
			self::STATUS_PERFORM,
			self::STATUS_DONE,
			self::STATUS_CANCEL,
			self::STATUS_FAIL			
		];
	}

	public static function TaskActionList() {
		return [
			self::STATUS_NEW,
			self::STATUS_PERFORM,
			self::STATUS_DONE,
			self::STATUS_CANCEL,
			self::STATUS_FAIL			
		];
	}
}





