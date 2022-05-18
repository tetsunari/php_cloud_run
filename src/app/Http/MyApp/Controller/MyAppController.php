<?php declare(strict_types=1);

namespace App\Http\MyApp\Controller;

use App\Service\MyApp\MyAppService;
use App\Service\Redis\RedisService;
use Illuminate\Redis\Connections\Connection;

final class MyAppController
{
    public function __construct(
        private MyAppService $MyAppService,
        private RedisService $RedisService,
    )
    {}

    public function index()
    {
        $this->MyAppService->index();
    }

    public function redis()
    {
        $Redis = $this->RedisService->validConnect();
        if ($Redis instanceof Connection) {
            $redis_key = $this->RedisService->setValue($Redis);
            if ($redis_key !== null) $this->RedisService->getValue($Redis, $redis_key);
        }
    }
}
