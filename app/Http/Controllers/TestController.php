<?php

namespace App\Http\Controllers;

use App\Services\SimpleLogger;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(public SimpleLogger $simpleLogger)
    {

    }

    public function index()
    {
        $this->simpleLogger->log('User access');
    }
}
