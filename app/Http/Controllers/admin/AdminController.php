<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Correct namespace
use Illuminate\Http\Request;

class AdminController extends Controller // Extend the correct Controller class
{
    public function index()
    {
        // Code to handle the Administrator subsystem
        return view('admin.index');
    }
}