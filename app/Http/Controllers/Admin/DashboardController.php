<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Event;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_clubs' => Club::count(),
            'total_events' => Event::count(),
            'total_students' => User::where('role', 'student')->count(),
            'recent_clubs' => Club::latest()->take(5)->get(),
            'upcoming_events' => Event::where('date', '>=', now())
                                    ->orderBy('date')
                                    ->take(5)
                                    ->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}