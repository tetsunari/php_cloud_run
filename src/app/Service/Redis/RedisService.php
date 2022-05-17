<?php declare(strict_types=1);

namespace App\Service\Redis;

use Illuminate\Redis\Connections\Connection;

final class RedisService
{
    public function __construct(private RedisInterface $RedisInterface)
    {}

    public function validConnect(): ?Connection
    {
        return $this->RedisInterface->validConnect();
    }

    public function setValue(Connection $Redis)
    {
        $this->RedisInterface->setValue($Redis);
    }
}
