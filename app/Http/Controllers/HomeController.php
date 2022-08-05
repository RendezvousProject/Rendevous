<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Workspace;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $workspaces = Workspace::all();
        return view('home', compact('workspaces'));
    }
}
