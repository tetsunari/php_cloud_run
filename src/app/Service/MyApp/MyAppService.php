<?php declare(strict_types=1);

namespace App\Service\MyApp;

final class MyAppService
{
    public function __construct(private MyAppInterface $MyAppInterface)
    {}

    public function index()
    {
        $this->MyAppInterface->index();
    }
}
