<?php declare(strict_types=1);

namespace App\Repository\Redis;

use App\Service\Redis\RedisInterface;
use Illuminate\Redis\Connections\Connection;
use Illuminate\Redis\RedisManager;

final class RedisRepository implements RedisInterface
{
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

    public function setValue(Connection $Redis)
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
        $Redis->command('SET', ['json', $data]);
        $test = $Redis->command('GET', ['json']);
        dd(json_decode($test, true));
    }
}
