<?php

namespace App\Http\Controllers;

use App\Users;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = Users::all();
        return response($data);
    }

    public function show($id)
    {
        $data = Users::where('id','=',$id)->first();
        return response($data);
    }

    //
}
