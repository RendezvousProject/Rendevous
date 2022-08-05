<?php

namespace App\Http\Controllers\Owner;
use App\Models\Tainant;
use App\Models\Workspace;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TainentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tainents = Tainant::where('owner_id', Auth::guard(session('guardName'))->user()->id)->get();
        return view('owner.tainent.index',compact('tainents'));
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
        $workspace = Workspace::where('id', $request->workspace_id)->first();

        $tainents = Tainant::where('workspace_id', $workspace->id)->first();

        $start = Carbon::createFromFormat('Y-m-d', $request->start_date);
        $end = Carbon::createFromFormat('Y-m-d', $request->end_date);
        $diff_in_days = $start->diffInDays($end);

            if ( $workspace->remaining_days == 0 ) {
            Tainant::create([
                'workspace_id' => $request->workspace_id,
                'owner_id' => $request->owner_id,
                'user_id' => Auth::guard(session('guardName'))->user()->id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'total' => $diff_in_days * $workspace->price,
                'remaining_days' => $diff_in_days,
                'per_day' => $workspace->price,
            ]);

            $workspace->update([
                'remaining_days' => $diff_in_days,
            ]);

        }else {
            toastr()->error('The office is currently booked');

            return redirect()->back();
        }

        $workspace->update([
            'status' => 'booked',
        ]);

        toastr()->success('Done !');

        $tainents = Tainant::where('user_id', Auth::guard(session('guardName'))->user()->id)->get();
        return view('customer.workspace.index', compact('tainents'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
