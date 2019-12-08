<?php

namespace taskforse;

class Task {
	public const STATUS_NEW = 'new';
	public const STATUS_PERFORM = 'performed';
	public const STATUS_DONE = 'done';
	public const STATUS_CANCEL = 'canceled';
	public const STATUS_FAIL = 'failed';

	public const ACTION_CREATE = 'create'; //создать
	public const ACTION_CANCEL = 'cancel'; //отменить
	public const ACTION_APPLY = 'apply'; //откликнуться
	public const ACTION_EXECUTE = 'execute'; //выполнить
	public const ACTION_REFUSE = 'refuse'; //отказаться

	public const ROLE_CUSTOMER = 'customer';
	public const ROLE_PERFORMER = 'performer';

	public static function taskStatusList():arrow 
	{
		return [
			self::STATUS_NEW,
			self::STATUS_PERFORM,
			self::STATUS_DONE,
			self::STATUS_CANCEL,
			self::STATUS_FAIL			
		];
	}

	public static function taskActionList():arrow 
	{
		return [
			self::ACTION_CREATE,
			self::ACTION_CANCEL,
			self::ACTION_APPLY,
			self::ACTION_EXECUTE, 
			self::ACTION_REFUSE
		];
	}
}
