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

    public function setValue(Connection $Redis): ?string
    {
        return $this->RedisInterface->setValue($Redis);
    }

    public function getValue(Connection $Redis, string $redis_key)
    {
        $this->RedisInterface->getValue($Redis, $redis_key);
    }
}
