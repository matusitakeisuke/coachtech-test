<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('confirm')->get();
        $categories = Categorie::all();

        return view('index', compact('contacts', 'categories'));
    }
}
