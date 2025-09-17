@extends('layouts.chat')

@section('title', 'Safety Guidelines - Chatying')
@section('description', 'Stay safe on Chatying. Read our safety guidelines for online chatting, privacy tips, and how to report abuse or inappropriate behavior.')
@section('keywords', 'chat safety, online safety, chat guidelines, chatying safety, report abuse, privacy tips, safe chat rooms')
@section('canonical', route('safety'))

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

        .section ul {
            padding-left: 1.5rem;
        }

        .section li {
            margin-bottom: 0.5rem;
        }

        .section li strong {
            color: var(--primary-color);
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
    <main class="main-content" aria-label="Safety Guidelines">
        <h1>Safety Guidelines</h1>
        
        <div class="section">
            <h2>Stay Safe While Chatting</h2>
            <ul>
                <li><strong>Protect Your Privacy:</strong> Never share personal information such as your address, phone number, or financial details.</li>
                <li><strong>Be Respectful:</strong> Treat all users with kindness and respect. Harassment and hate speech are not tolerated.</li>
                <li><strong>Report Abuse:</strong> Use the report feature or contact us if you encounter inappropriate behavior.</li>
                <li><strong>Be Cautious:</strong> If something feels off, trust your instincts and end the conversation.</li>
                <li><strong>Moderation:</strong> Our team works to keep Chatying safe, but always remain vigilant.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>How to Report a Problem</h2>
            <p>If you experience harassment, spam, or any suspicious activity, please email <a href="mailto:support@chatying.com">support@chatying.com</a> or use the in-chat report feature.</p>
        </div>
        
        <div class="section">
            <h2>More Safety Tips</h2>
            <ul>
                <li>Do not meet strangers from the internet in person without proper precautions.</li>
                <li>Keep your software and devices updated for security.</li>
                <li>Use strong, unique passwords for your accounts.</li>
            </ul>
        </div>
    </main>
@endsection
