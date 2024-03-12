<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $categories = Category::all();
        $events = Event::all();
        
        
        $data = [
            'categories' => $categories,
            'events' => $events,
            'users' => User::all(),
        ];
        return view('admin.dashboard',$data); }
}
