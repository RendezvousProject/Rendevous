<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Workspace;
use Illuminate\Http\Request;

class AdminWorkspacesController extends Controller
{
    public function index(){

        $workspaces = Workspace::get();
        return view('admin.workspace.index' , compact('workspaces'));

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
        return view('admin.workspace.show', compact('workspace'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workspace = Workspace::findOrFail($id);
        return view('admin.workspace.edit', compact('workspace'));
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

        $workspace = Workspace::findOrFail($id);

        $request->validate([
            'name' => ['required'],
            // 'price' => ['required'],

        ]);


        $workspace->update([
            'name' => $request->name,
            // 'price' => $request->price,

        ]);

        toastr()->success('Workspace Successfully Updated !');

        return redirect()->route('admin.workspace.index');
    }
// end update


        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workspace = Workspace::find($id);

        $workspace->delete();

        toastr()->success('Workspace Successfully Deleted !');

        return redirect()->route('admin.workspace.index');

    }
}
