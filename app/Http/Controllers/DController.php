<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;

class DController extends Controller
{
    public function dashboard()
    {
        $equipment = Equipment::all();
        $patient = Patient::all();
        return view('dashboard', compact('equipment', 'patient'));
    }
}
