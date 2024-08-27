<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return "Test WorkerController";
    }

    public function show()
    {
        return "Test WorkerController, show action";
    }
}
