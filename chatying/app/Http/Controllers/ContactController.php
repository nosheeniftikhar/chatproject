<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display the contact form.
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Save the contact to the database
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);

            $successMessage = 'Thank you for contacting us! We have received your message and will get back to you soon.';

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => $successMessage
                ]);
            }

            return back()->with('success', $successMessage);
        } catch (\Exception $e) {
            $errorMessage = 'Sorry, there was an error sending your message. Please try again later.';
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage
                ], 500);
            }

            return back()->with('error', $errorMessage)->withInput();
        }
    }

    /**
     * Get all contacts (for admin/backend use).
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show a specific contact.
     */
    public function view($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->markAsRead();
        return view('admin.contacts.view', compact('contact'));
    }
}
