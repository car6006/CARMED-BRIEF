<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        // Store user logic
    }
    public function show($id)
    {
        return view('users.show');
    }
    public function edit($id)
    {
        return view('users.edit');
    }
    public function update(Request $request, $id)
    {
        // Update user logic
    }
    public function destroy($id)
    {
        // Delete user logic
    }
}
