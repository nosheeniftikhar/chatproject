@extends('layouts.chat')

@section('title', 'Help - Chatying Support & FAQ')
@section('description', 'Get help with Chatying. Find answers to frequently asked questions, troubleshooting tips, and user support for our free online chat platform.')
@section('keywords', 'chatying help, chat support, chat faq, chat troubleshooting, chat guide, online chat help, chatying support')
@section('canonical', route('help'))

@section('page-styles')
        body { 
            font-family: 'Inter', Arial, sans-serif; 
            background-color: #F4F7FA; 
            color: #34495E; 
        }
        
        .main-content { 
            max-width: 900px; 
            margin: 2rem auto; 
            background: #fff; 
            border-radius: 12px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.08); 
            padding: 2rem; 
        }
        
        h1, h2 { 
            color: #2C3E50; 
        }
        
        .section { 
            margin-bottom: 2rem; 
        }

        .section p {
            line-height: 1.7;
        }

        .section a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 500;
        }

        .section a:hover {
            color: var(--accent-hover);
            text-decoration: underline;
        }
@endsection

@section('content')
    <main class="main-content" aria-label="Help & FAQ">
        <h1>Help & Frequently Asked Questions</h1>
        
        <div class="section">
            <h2>How do I start chatting?</h2>
            <p>Simply enter a nickname, select your gender, age, and country, then click "Enter Chat Room". No registration is required!</p>
        </div>
        
        <div class="section">
            <h2>Is Chatying free?</h2>
            <p>Yes, Chatying is 100% free to use. There are no hidden fees or subscriptions.</p>
        </div>
        
        <div class="section">
            <h2>How do I stay safe?</h2>
            <p>Never share personal information. Use the report feature to flag inappropriate behavior. Read our <a href="{{ route('safety') }}">Safety Guidelines</a> for more tips.</p>
        </div>
        
        <div class="section">
            <h2>Can I use Chatying on mobile?</h2>
            <p>Yes! Chatying is fully responsive and works on all devices.</p>
        </div>
        
        <div class="section">
            <h2>Need more help?</h2>
            <p>Email us at <a href="mailto:support@chatying.com">support@chatying.com</a> and our team will assist you promptly.</p>
        </div>
    </main>
@endsection
