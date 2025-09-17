<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatSession;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    /**
     * Handle the chat form submission
     */
    public function enterChat(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'nickname' => 'required|string|min:2|max:50|regex:/^[a-zA-Z0-9_\-\s]+$/',
            'gender' => 'required|in:male,female,other',
            'age' => 'required|integer|min:18|max:99',
            'country' => 'required|string|max:100',
            'state' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Create a new chat session
            $chatSession = ChatSession::create([
                'session_id' => ChatSession::generateSessionId(),
                'nickname' => $request->nickname,
                'gender' => $request->gender,
                'age' => $request->age,
                'country' => $request->country,
                'state' => $request->state,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            // Store session data for the chat room
            session([
                'chat_session_id' => $chatSession->id,
                'session_id' => $chatSession->session_id,
                'nickname' => $chatSession->nickname,
                'gender' => $chatSession->gender,
                'age' => $chatSession->age,
                'country' => $chatSession->country,
                'state' => $chatSession->state,
            ]);

            // Redirect to chat room
            return redirect()->route('chat.room')
                           ->with('success', 'Welcome to Chatying, ' . $chatSession->nickname . '!');
                           
        } catch (\Exception $e) {
            \Log::error('Chat session creation failed: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again.')
                        ->withInput();
        }
    }

    /**
     * Show the chat room
     */
    public function showChatRoom(Request $request)
    {
        // Check if user has a valid session
        if (!session('chat_session_id')) {
            return redirect()->route('home')
                           ->with('error', 'Please fill out the form to enter the chat room.');
        }

        $chatSession = ChatSession::find(session('chat_session_id'));
        
        if (!$chatSession || !$chatSession->isActive()) {
            session()->forget([
                'chat_session_id', 'session_id', 'nickname', 
                'gender', 'age', 'country', 'state'
            ]);
            return redirect()->route('home')
                           ->with('error', 'Your chat session has expired. Please start a new session.');
        }

        return view('userlogin', compact('chatSession'));
    }

    /**
     * End the chat session
     */
    public function endSession(Request $request)
    {
        if (session('chat_session_id')) {
            $chatSession = ChatSession::find(session('chat_session_id'));
            if ($chatSession) {
                $chatSession->markAsEnded();
            }
            
            session()->forget([
                'chat_session_id', 'session_id', 'nickname', 
                'gender', 'age', 'country', 'state'
            ]);
        }

        return redirect()->route('home')
                       ->with('success', 'Chat session ended. Thank you for using Chatying!');
    }
}
