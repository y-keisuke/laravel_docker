<?php

namespace App\Http\Controllers;

use App\Models\AAA;
use App\Models\User;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $user = User::query()
            ->where('name', '=', 'test_name')
            ->get();
        return view('index', ['user' => $user]);
    }
}
