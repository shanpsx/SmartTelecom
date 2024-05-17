<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class DashboardController extends Controller
{
    public function index()
    {
        $planos = Plano::all();
        return view('dashboard', compact('planos'));
    }
}