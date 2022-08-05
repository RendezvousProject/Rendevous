<?php
namespace App\Http\Controllers\Customer;
use App\Models\Workspace;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $search = request()->query('search');

        $workspaces = null;
        if($search) {
            $workspaces = Workspace::where('name' ,'LIKE' , "%{$search}%")
            ->orWhere('width','LIKE' , "%{$search}%")
            ->orWhere('location','LIKE' , "%{$search}%")->paginate(6);

        } else if (!$search){
            $workspaces = Workspace::paginate(6);
        }

        return view('customer.Exploration', compact('workspaces'));
    }

}
