<?php declare(strict_types=1);

namespace App\Http\MyApp\Controller;

use App\Service\MyApp\MyAppService;

final class MyAppController
{
    public function __construct(private MyAppService $MyAppService)
    {}

    public function index()
    {
        $this->MyAppService->index();
    }
}
