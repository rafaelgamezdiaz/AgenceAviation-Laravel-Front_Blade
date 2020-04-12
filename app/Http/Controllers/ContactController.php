<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('contact', compact('categories'));
    }
}
