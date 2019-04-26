<?php

namespace App\Http\Controllers\Web\AGS\User;

use Illuminate\Http\Request;
use App\Role;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\AGS\Branch;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index')
            ->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create')
            ->with('branches', Branch::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'contact' => 'required',
            'password' => 'required|min:6',
            'branch_id' => 'required',
        ];

        $this->validate($request, $rules);

        $data = $request->all();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;
        $data['password'] = bcrypt($request->password);
        $data['branch_id'] = $request->branch_id;

        $user = User::create($data);

        Session::flash('success', 'The user was Sucessfully saved');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.user.show')
                ->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.user.edit')
                ->with('branches', Branch::all())
                ->with('user', $user);
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
       $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'contact' => 'required',
            'branch_id' => 'required',
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->branch_id = $request->branch_id;
        
        $user->save();
        Session::flash('success', 'The user was Sucessfully Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        Session::flash('success', 'You successfully deleted the user');
        return redirect()->route('users.index');
    }
}
