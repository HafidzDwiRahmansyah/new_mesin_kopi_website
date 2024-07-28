<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MonitoringController extends Controller
{
    public function show()
    {
        $data = User::where('role', 'monitoring')->get();
        return view('user.monitoring.show', compact('data'));
    }
}
