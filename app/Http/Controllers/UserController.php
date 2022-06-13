<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array('title' => 'User Profil');
        $users = User::all();
        return view('user.index', $data , compact(['users']));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.setting', [
            'title' => 'Edit Profile',
            'user' => $user,
            'user' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'   => 'required',
            'alamat'   => 'required',
            'phone'   => 'required',
        ]);

        //get data Blog by ID
        $user = User::findOrFail($user->id);

        $user->update([
                'name'     => $request->name,
            'email'   => $request->email,
            'alamat'   => $request->alamat,
            'phone'   => $request->phone,
            'foto'   => $request->foto,
            ]);

            return redirect('/profil');

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
