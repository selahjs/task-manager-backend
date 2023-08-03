<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formField = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role_id'=>'required',
        ]);
        
        $formField['password'] = bcrypt($formField['password']);
        
        User::create($formField);

        return `user successfully created`;
    }

    public function logout()
    {
        auth()->logout();

        return "logged out";
    }

    public function login(Request $request)
    {
        $formField = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(auth()->attempt($formField)){
            $request->session()->regenerate();

            return 'successfully logged in';
        }
        
        return 'invalid username or password';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
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
