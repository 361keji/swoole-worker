<?php

declare(strict_types=1);

namespace MrHd\Swoole\Helper;

use Swoole\Server\PipeMessage;
use Swoole\Server\Task;
use MrHd\Swoole\Interfaces\TaskEventInterface;
use MrHd\Swoole\Worker;

class TaskEvent implements TaskEventInterface
{
    public $worker;

    public function __construct(Worker $worker)
    {
        $this->worker = $worker;
    }

    public function onWorkerStart()
    {
    }

    public function onWorkerExit()
    {
    }

    public function onWorkerStop()
    {
    }

    public function onTask(Task $task)
    {
    }

    public function onPipeMessage(PipeMessage $pipeMessage)
    {
    }
}
