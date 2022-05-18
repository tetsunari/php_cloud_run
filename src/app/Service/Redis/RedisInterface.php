<?php declare(strict_types=1);

namespace App\Service\Redis;

use Illuminate\Redis\Connections\Connection;

interface RedisInterface
{
    public function validConnect(): ?Connection;
    public function setValue(Connection $Redis): string;
    public function getValue(Connection $Redis, string $redis_key);
}
