<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

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
}
