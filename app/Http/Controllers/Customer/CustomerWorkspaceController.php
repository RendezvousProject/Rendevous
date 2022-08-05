<?php

namespace App\Http\Controllers\Customer;
use App\Models\Workspace;
use App\Models\Tainant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerWorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $request = request();

        $name = $request->query('name');
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');
        $price_from = $request->query('price_from');
        $price_to = $request->query('price_to');

        // $model = User::with('workspace');
        $workspace = Workspace::all();


        $perpage = $request->query('perpage');

         if($name) {
            $workspaces = Workspace::where('name' ,'LIKE' , '%{$name}%');
        }
         if($start_date) {
            $workspaces = Workspace::where('name' ,'>=' , '%{$start_date}%');
        }
         if($end_date) {
            $workspaces = Workspace::where('name' ,'<=' , '%{$end_date}%');
        }
         if($price_from) {
            $workspaces = Workspace::where('name' ,'>=' , '%{$price_from}%');
        }
         if($price_to) {
            $workspaces = Workspace::where('name' ,'<=' , '%{$price_to}%');
        }
        // if($workspace_id){

        // }
        if($perpage == 'all'){
            $customers = Workspace::all();
        } else{
            $customers = Workspace::paginate($perpage);
        }

        $tainents = Tainant::where('user_id', Auth::guard(session('guardName'))->user()->id)->get();
        return view('customer.workspace.index',
            compact('tainents','customers','name','start_date','end_date','price_from','price_to'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workspace = Workspace::findOrFail($id);
        return view('customer.show', compact('workspace'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDays(Request $request)
    {
        return response()->json([
            'days' => $request->days,
        ]);
    }

    public function specificWorkspace($id)
    {
        $workspace = Workspace::findOrFail($id);
        return view('customer.workspace.specific_workspace', compact('workspace'));
    }
    // public function index(){
    //     $workspaces = DB::table('workspaces')->get();
    //     return view('customer.workspace.index', compact('workspaces'));
    // }
    // public function show($id)
    // {
    //     $workspace = Workspace::findOrFail($id);
    //     return view('customer.show', compact('workspace'));
    // }
}
