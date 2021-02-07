<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(StoreRequest $request)
    {
//        dd($request->all());
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $store = Admin::create($data);

        return redirect()->back()->with('success', 'Store created successfully.');

    }
}
