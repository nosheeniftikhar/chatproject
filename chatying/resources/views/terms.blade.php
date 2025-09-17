@extends('layouts.chat')

@section('title', 'Terms of Service - Chatying')
@section('description', 'Read the Terms of Service for Chatying. Understand your rights, responsibilities, and the rules for using our free online chat platform.')
@section('keywords', 'terms of service, chatying terms, chat rules, online chat terms, user agreement, chat platform rules')
@section('canonical', route('terms'))

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
    <main class="main-content" aria-label="Terms of Service">
        <h1>Terms of Service</h1>
        
        <div class="section">
            <h2>Acceptance of Terms</h2>
            <p>By accessing or using Chatying, you agree to abide by these Terms of Service and all applicable laws. If you do not agree, please do not use our platform.</p>
        </div>
        
        <div class="section">
            <h2>User Responsibilities</h2>
            <ul>
                <li>You must be at least 18 years old to use Chatying.</li>
                <li>Respect all users. Harassment, hate speech, and inappropriate content are strictly prohibited.</li>
                <li>Do not share personal information or solicit sensitive data from others.</li>
                <li>Do not use Chatying for illegal activities or spam.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Content Moderation</h2>
            <ul>
                <li>Chatying reserves the right to remove content or ban users who violate our rules.</li>
                <li>We use automated and manual moderation to keep the platform safe.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Disclaimer</h2>
            <p>Chatying is provided as-is. We are not responsible for user-generated content or third-party links. Use the platform at your own risk.</p>
        </div>
        
        <div class="section">
            <h2>Changes to Terms</h2>
            <p>We may update these terms at any time. Continued use of Chatying means you accept the latest version.</p>
        </div>
        
        <div class="section">
            <h2>Contact</h2>
            <p>For questions about these terms, email <a href="mailto:terms@chatying.com">terms@chatying.com</a>.</p>
        </div>
    </main>
@endsection
