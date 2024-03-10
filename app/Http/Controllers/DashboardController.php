<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $categories = Category::all();
        $events = Event::all();
        
        $data = [
            'categories' => $categories,
            'events' => $events,
        ];
        return view('admin.dashboard',$data); }
}
