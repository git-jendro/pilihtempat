<?php

namespace App\Http\Controllers;

use App\Coworker;
use App\Facility;
use App\User;
use App\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $coworker = Coworker::count();
        $venue = Venue::count();
        $facility = Facility::count();
        $user = User::where('role_id',2)->count();
        return view('dashboard', compact('coworker', 'venue', 'facility', 'user'));
    }
}
