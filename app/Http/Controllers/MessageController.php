<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PostService;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        $totalMessages = $messages->count();
        return view('messages', compact('messages', 'totalMessages'));
    }

    public function create()
    {

        return view('create-message');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255',
            'contact_info' => 'nullable|string|max:255',
        ]);

        $message = Message::create($validatedData);

        return redirect()->route('messages')->with('success', 'Message created successfully!');
    }
}
