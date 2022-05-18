<?php declare(strict_types=1);

namespace App\Repository\Redis;

use App\Service\Redis\RedisInterface;
use Illuminate\Redis\Connections\Connection;
use Illuminate\Redis\RedisManager;

final class RedisRepository implements RedisInterface
{
    private const SUGGEST_REDIS_KEY = 'json';

    public function __construct(private RedisManager $Redis)
    {}

    public function validConnect(): ?Connection
    {
        try {
            return $this->Redis->connection();
        } catch (\Exception $e) {
            report($e);
            return null;
        }
    }

    public function setValue(Connection $Redis): string
    {
        $data = [
            'me' => [
                'favorite' => [
                    'movie',
                    'soccer',
                ],
                'job' => [
                    'engineer',
                    'teacher',
                ]
            ],
            'you' => [
                'favorite' => [
                    'study',
                    'fashion',
                ],
                'job' => [
                    'student',
                    'soccer player',
                    'actor'
                ]
            ]
        ];
        $data = json_encode($data);
        $Redis->command('SET', [self::SUGGEST_REDIS_KEY, $data]);
        return self::SUGGEST_REDIS_KEY;
    }

    public function getValue(Connection $Redis, string $redis_key)
    {
        if ($Redis->command('EXISTS', [$redis_key])) dd($Redis->command('GET', ['json']));
    }
}
