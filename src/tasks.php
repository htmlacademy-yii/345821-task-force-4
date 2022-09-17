<?php

class Task
{
    // константы со всеми статусами
    const STATUS_NEW = 'new';
    const STATUS_IN_PROGRESS = 'progressing';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_COMPLETED = 'completed';
    const STATUS_FAILED = 'failed';

    const ACTION_RESPOND = 'respond';
    const ACTION_CANCEL = 'cancel';
    const ACTION_ACCEPT = 'accept';
    const ACTION_ASSIGN = 'assign';
    const ACTION_REJECT = 'reject';

    public $customerId = [];
    public $userId = [];

    private static $statusName =  [
        self::STATUS_NEW => 'Новое',
        self::STATUS_CANCELLED => 'Отменено',
        self::STATUS_COMPLETED => 'Выполнено',
        self::STATUS_IN_PROGRESS => 'На исполнении',
        self::STATUS_FAILED => 'Провалено',
    ];


    private $actionName = [
        self::ACTION_RESPOND => 'Взять задание',
        self::ACTION_CANCEL => 'Отменить',
        self::ACTION_ACCEPT => 'Завершить',
        self::ACTION_ASSIGN => 'Подтвердить',
        self::ACTION_REJECT => 'Отклонить задание',
    ];
    public function __construct($customerId, $userId){
        $this->customerId = $customerId;
        $this->userId = $$userId;

    }
    public function getNextStatus()
    {

    }

    public function getAction()
    {

    }
}
