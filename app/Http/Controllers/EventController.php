<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.eventCreate', compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'categorie_id' => 'required',
            'description' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'image' => 'required',
            'nbPlace' => 'required',
        ]);



        $event = new Event();
        $event->user_id = Auth::id();
        $event->titre = $validatedData['title'];
        $event->categorie_id = $validatedData['categorie_id'];
        $event->description = $validatedData['description'];
        $event->date = $validatedData['date'];
        $event->lieu = $validatedData['lieu'];
        $event->image = $validatedData['image'];
        $event->nbPlace = $validatedData['nbPlace'];

        $imageName = time() . '.' .  $request->file('image')->extension();

        $request->image->move(public_path("storage"), $imageName);

        $validatedData["image"] = $imageName;
        $validatedData["user_id"] = Auth::id();
        $event->user_id = $validatedData['user_id'];
        $event->image = $validatedData['image'];


        $event->save();

        return redirect()->back()->with('success', 'Événement ajouté avec succès');
    }



    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */



    public function edit(Event $event)
    {
        $categories = Category::all();

        return view('admin.eventUpdate', compact('event', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'categorie_id' => 'required',
            'description' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'image' => 'required',
            'nbPlace' => 'required',
        ]);
        $event->update($validatedData);
        return redirect()->back()->with('success', 'Event Updateded successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back()->with(['success' => 'category Deleted Successfully!']);
    }

    
    public function search(Request $request)
    {
        $query = $request->input('query');

        $events = Event::where('titre', 'like', '%' . $query . '%')->get();
        // Return the view with the search results
        return view('welcome',compact('events'));
    }
}
