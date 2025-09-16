<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
<<<<<<< HEAD
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        // Store logic here
    }

    public function show(Doctor $doctor)
    {
        // Show logic here
    }

    public function edit(Doctor $doctor)
    {
        // Edit logic here
    }

    public function update(Request $request, Doctor $doctor)
    {
        // Update logic here
    }

    public function destroy(Doctor $doctor)
    {
        // Destroy logic here
    }
=======

class DoctorController
{
    /**
     * Display a listing of the doctors.
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctors.index', compact('doctors'));
    }
>>>>>>> 2290fb2479c24a1e8f1fa889dc56e48c4c3059d8
}
