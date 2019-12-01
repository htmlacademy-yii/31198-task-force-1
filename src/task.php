namespace taskforse;

class Task {
	public STATUS_NEW = 'new';
	public STATUS_PERFORM = 'performed';
	public STATUS_DONE = 'done';
	public STATUS_CANCEL = 'canceled';
	public STATUS_FAIL = 'failed';

	public ACTION_CREATE = 'create';
	public ACTION_CANCEL = 'cancel';
	public ACTION_RESPOND = 'respond';
	public ACTION_ESTIMATE = 'estimate';

	public ROLE_CUSTOMER = 'customer';
	public ROLE_PERFORMER = 'performer';

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





