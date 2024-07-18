<?php

namespace App\Http\Controllers;

use App\Models\Branchlist;
use Illuminate\Http\Request;

class BranchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:administrator');
    }

    public function index(Request $request)
    {

        $pagination  = 10;
        $branch    = Branchlist::when($request->keyword, function ($query) use ($request) {
            $query->where('branch_name', 'like', "%{$request->keyword}%");
        })->orderBy('branch_code', 'asc')->paginate($pagination);

        $branch->appends($request->only('keyword'));

        return view('branch.index', [
            'branch_name'    => 'Branch Name',
            'branch' => $branch,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);

        /*$branch = Branchlist::orderBy('branch_code','asc')->paginate(10);
    
        return view('branch.index',compact('branch'))
            ->with('i', (request()->input('page', 1) - 1) * 10);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'branch_code' => 'required',
            'branch_name' => 'required',
            'parent_branch' => 'required',

        ]);

        Branchlist::create($request->all());

        return redirect()->route('branch.index')
            ->with('success', 'Branchlist created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branchlist  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branchlist $branch)
    {
        return view('branch.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branchlist  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branchlist $branch)
    {
        return view('branch.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branchlist  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branchlist $branch)
    {
        $request->validate([
            'branch_code' => 'required',
            'branch_name' => 'required',
            'parent_branch' => 'required',
        ]);

        $branch->update($request->all());

        return redirect()->route('branch.index')
            ->with('success', 'Branchlist updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branchlist  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branchlist $branch)
    {
        $branch->delete();

        return redirect()->route('branch.index')
            ->with('success', 'Branchlist deleted successfully');
    }
}
