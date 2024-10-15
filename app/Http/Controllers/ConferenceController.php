<?php

namespace App\Http\Controllers;

use App\Models\Conference; // Make sure to import the Conference model
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
{
    $conferences = Conference::all(); // or any other method to retrieve conferences
    return view('admin.index', compact('conferences'));
}
    public function update($id)
{
    $conference = Conference::find($id);
    $conference->name = request('name');
    $conference->description = request('description');
    $conference->save();
    return redirect()->route('conferences.index');
}
}
