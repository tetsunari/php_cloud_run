<?php declare(strict_types=1);

namespace App\Repository\MyApp;

use App\Service\MyApp\MyAppInterface;
use Illuminate\Database\DatabaseManager;

final class MyAppRepository implements MyAppInterface
{
    public function __construct(private DatabaseManager $DB)
    {}

    public function index()
    {
        $test = $this->DB->connection()->table('users')->get();
        dd($test);
    }
}
