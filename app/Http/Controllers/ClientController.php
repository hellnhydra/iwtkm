<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
class ClientController extends Controller
{
    
    public function index()
    {
        // duomenu masyvas
        $conferences = [
            ['id' => 1, 'name' => 'Politikaa', 'date' => '2024-10-15'],
            ['id' => 2, 'name' => 'Ekonomika', 'date' => '2024-11-15'],
        ];
    
        return view('client.conferences.index', ['conferences' => $conferences]);
    }

    // grazina
    public function show($id)
    {
        // duomenu masyvas pavytzdis
    $conference = [
        'id' => 1,
        'name' => 'Konferencija ' . $id,
        'description' => 'Politika',
        'date' => '2024-10-15',
        'location' => 'Zoom'
    ];
    
    
  

    return view('client.conferences.show', ['conference' => $conference],);
    }

    // fukncija registracijai
    public function register($id)
    {
        
        return redirect('/client')->with('success', 'Sekmingai uzsiregistravote i konferencija su ID: ' . $id);
    }
   
    public function editConference(Conference $conference)
{
    // Load the conference data
    $conference = Conference::find($conference->id);

    // Return the edit view with the conference data
    return view('admin.conferences.edit', compact('conference'));
}
public function update(Request $request, Conference $conference)
{
    // Validate the input data
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
    ]);

    // Update the conference data
    $conference->name = $request->input('name');
    $conference->description = $request->input('description');
    $conference->save();

    // Redirect back to the conference list with a success message
    return redirect()->route('conferences.index')->with('success', 'Conference updated successfully!');
}


}
