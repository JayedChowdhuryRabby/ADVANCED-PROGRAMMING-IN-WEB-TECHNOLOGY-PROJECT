<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Client;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginRequest  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
    public function Login()
    {
        return view('login');
    }
    public function loginSubmit(Request $request)
    {
        $customer= Customer::where('email',$request->email)
                             ->where('password',$request->password)
                             ->first();
        
        if($customer){
            $request->session()->put('user',$customer->customer_id);
            $request->session()->put('userName',$customer->name);
            return redirect()->route('customerDash');
        }
        $client= Client::where('email',$request->email)
                             ->where('password',$request->password)
                             ->first();
        
        if($client){
            $request->session()->put('userclient',$client->name);
            
            return redirect()->route('clientDash');
        }
        return back();
    }
    public function logout()
    {
        session()->forget('user');
        session()->forget('userclient');
        return redirect()->route('login');


    }

    
    
}
