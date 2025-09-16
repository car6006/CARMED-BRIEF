<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Models\Doctor;

=======
>>>>>>> 2290fb2479c24a1e8f1fa889dc56e48c4c3059d8
class DashboardController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $doctors = Doctor::all();
        return view('dashboard', compact('doctors'));
=======
        return view('dashboard');
>>>>>>> 2290fb2479c24a1e8f1fa889dc56e48c4c3059d8
    }
}
