<?php declare(strict_types=1);

final class MyAppService
{
    public function __construct(private MyAppInterface $MyAppInterface)
    {}

    public function index()
    {
        $this->MyAppInterface->index();
    }
}
