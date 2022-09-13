<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Nakamurayuta\PhpLibrary\Service\LibraryService;

class HelloController extends Controller
{
    public function __invoke(): string
    {
        $service = new LibraryService();
        return "Hello, world!  " . $service->execute();
    }
}
