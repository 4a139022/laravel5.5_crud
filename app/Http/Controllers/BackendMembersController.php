<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class BackendMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Members::oldest()->paginate(5);
        return view('members.index',compact('members'))
        ->with('i', (request()->input('member', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a member resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('members.create');
    }

    /**
     * Store a memberly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        // request()->validate([
        //     'published_date' => 'required',
        //     'account' => 'required',
        //     'password' => 'required',
        //     'name' => 'required',
        //     'gender' => 'required',
        //     'address' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'birthday' => 'required',
        //     'mobile' => 'required',
        //     'zipcode' => 'required',
        //     'country' => 'required',
        //     'district' => 'required',
        //     'status' => 'required',
        //     'money' => 'required',
        //     'content' => 'required',
        // ]);


        Members::create($request->all());

        return redirect()->route('members.index');
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
    public function edit($members_id)
    {
        //
        $members = Members::find($members_id);
        return view('members.edit',compact('members'));
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
        request()->validate([
            'published_date' => 'required',
            'account' => 'required',
            'password' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
            'mobile' => 'required',
            'zipcode' => 'required',
            'country' => 'required',
            'district' => 'required',
            'status' => 'required',
            'money' => 'required',
            'content' => 'required',
        ]);


        Members::find($id)->update($request->all());

        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($members_id)
    {
        //
        Members::find($members_id)->delete();

        return redirect()->route('members.index');
    }
}
