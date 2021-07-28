<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','edit');
    }

    public function index()
    {
        return 'Welcome Ya Omda';
    }

    public function edit()
    {
        return 'Welcome Ya Omda';
    }

    public function show()
    {
        return 'Welcome Ya Omda';
    }
}
