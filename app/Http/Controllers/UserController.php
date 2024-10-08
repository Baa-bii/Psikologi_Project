<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showHome(): View
    {
        // Assume you are fetching a user with the given ID
        // $user = User::find($id);
        
        // Pass the user to the view
        return view('home');
    }

    public function showProduct(): View
    {
        return view('ourproduct');
    }

    public function showCreate(): View
    {
        return view('createyourown');
    }
}
