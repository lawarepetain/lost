<?php

namespace App\Http\Controllers;

use App\Models\ObjetPerdu;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $objets = ObjetPerdu::latest()->paginate(10);
        $users = User::paginate(10);

        return view('admin.dashboard', compact('objets', 'users'));
    }
}
