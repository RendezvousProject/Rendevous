<?php
namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $entries = DB::table('users')->get();
        $workspaces = DB::table('workspaces')->get();
        return view('owner.home',
        [
            'users' => $entries,
            'workspaces' => $workspaces
        ]);

    }

}
