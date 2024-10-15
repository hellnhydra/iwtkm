<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function edit(Conference $conference)
    {
        return view('conferences.edit', compact('conference'));
    }
}