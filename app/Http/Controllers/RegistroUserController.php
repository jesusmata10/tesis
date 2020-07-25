<?php

namespace App\Http\Controllers;

use App\RegistroUser;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class RegistroUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulario2');
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
    public function store(UserRequest $request)
    {
        
//        dd($request->all());
        $input=$request->all();
        $input['name'] = $input['nombres'];
        $input['password'] = bcrypt($input['password']);
        $input['email'] = $input['email'];
        
        $usuario=RegistroUser::create($input);

        return back()->with('mensaje', 'Se ha agregado el nuevo Usuario');

        return view('');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroUser  $registroUser
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroUser $registroUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroUser  $registroUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroUser $registroUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroUser  $registroUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroUser $registroUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistroUser  $registroUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroUser $registroUser)
    {
        //
    }
}
