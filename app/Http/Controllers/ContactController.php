<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Exception;
use Inertia\Inertia;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return Inertia::render('Contact/ContactsPage', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Contact/ContactCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);

            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);

            $data = [
                'message' => 'Your message has been sent successfully!',
                'status' => true,
                'error' => '' // No error on success
            ];
            return redirect()->route('home.page')->with($data);

        } catch (Exception $e) {
            // Log the exception for debugging (optional but recommended)
            \Log::error('Error storing contact message: ' . $e->getMessage());

            $data = [
                'message' => 'There was an error sending your message. Please try again.',
                'status' => false,
                'error' => $e->getMessage() // You can pass the actual error message for debugging if needed on the frontend
            ];
            // Redirect back with an error data

            return redirect()->back()->with($data);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        try {
            $contact->delete();
            $data = ['message' => 'Contact message deleted successfully', 'status' => true, 'error' => ''];
            return redirect()->route('contact.index')->with($data);
        } catch (Exception $e) {
            $data = ['message' => $e->getMessage(), 'status' => false, 'error' => ''];
            return redirect()->route('contact.index')->with($data);
        }

    }
}
