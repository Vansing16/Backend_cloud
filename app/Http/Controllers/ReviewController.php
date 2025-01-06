<?php
namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $messages = ContactUs::all();
        $totalMessages = $messages->count();

        return view('reviews', compact('messages', 'totalMessages'));
    }

    public function create()
    {
        return view('create-review');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255',
        ]);

        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('admin.reviews')->with('success', 'Message sent successfully!');
    }

    public function destroy($id)
    {
        $message = ContactUs::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.reviews')->with('success', 'Message deleted successfully!');
    }
}
