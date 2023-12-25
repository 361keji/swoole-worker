<?php

declare(strict_types=1);

namespace MrHd\Swoole\Cmd;

use Swoole\Coroutine\Server\Connection;
use MrHd\Swoole\Interfaces\CmdInterface;
use MrHd\Swoole\Gateway;
use MrHd\Swoole\Protocol;

class GetUidList implements CmdInterface
{
    public static function getCommandCode(): int
    {
        return 14;
    }

    public static function encode(): string
    {
        return pack('C', self::getCommandCode());
    }

    public static function execute(Gateway $gateway, Connection $conn, string $buffer)
    {
        $buffer = '';
        foreach ($gateway->uid_list as $uid => $fd_list) {
            $buffer .= pack('C', strlen((string) $uid)) . $uid;
        }

        $conn->send(Protocol::encode($buffer));
    }
}
