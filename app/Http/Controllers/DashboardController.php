<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DashboardController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('dashboard', compact('doctors'));
    }
}
