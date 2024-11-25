<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Error;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageController extends Controller
{
    // Show the form to create a new post// Show the form to create a new post
    public function create()
    {
        return view('create'); // Return the view for the form
    }

    // Handle the form submission
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
        }

        // Create a new post
        Posts::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        // Redirect or return response
        return redirect()->route('dashboard')->with('success', 'Post created successfully.');
    }

}