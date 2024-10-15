<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        // Laikinas konferenciju sarasas
        $conferences = [
            ['id' => 1, 'name' => 'Politika', 'description' => 'Politika'],
            ['id' => 2, 'name' => 'Ekonomika', 'description' => 'Ekonomika'],
        ];
        return view('employee.conferences', compact('conferences'));
    }
    
    public function show($id) {
        // Laikina konferencijos informacija be database
        $conference = ['id' => $id, 'name' => 'Konferencija ' . $id, 'description' => 'Aprašymas ' . "$id"];
        // Laikinas registruotu dalyviu sarasas be database
        $participants = [
            ['name' => 'John Cena'],
            ['name' => 'Agent 007'],
        ];
        return view('employee.conference', compact('conference', 'participants'));
    }
    public function edit($id) {
        // Find the conference by ID (for now we will use the same dummy data)
        $conference = ['id' => $id, 'name' => 'Konferencija ' . $id, 'description' => 'Aprašymas ' . "$id"];
        
        return view('employee.edit_conference', compact('conference'));
    }
    
    public function update(Request $request, $id) {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        // Here you would typically update the conference in the database
        // For now, we will just simulate the update
        // $conference = Conference::find($id);
        // $conference->update($validatedData);
    
        // Redirect back to the conference list with a success message
        return redirect()->route('conferences.index')->with('success', 'Konferencija atnaujinta sėkmingai!');
    }
}
