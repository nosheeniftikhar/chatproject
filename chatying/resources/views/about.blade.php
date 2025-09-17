@extends('layouts.chat')

@section('title', 'About Chatying - Free Online Chat Rooms')
@section('description', 'Learn about Chatying, our mission, values, and how we connect people worldwide in a safe, free chat environment. Discover why Chatying is a top choice for online chatting.')
@section('keywords', 'about chatying, chatying mission, chatying values, free chat rooms, online chat, global chat platform, safe chat, meet new people')
@section('canonical', route('about'))

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
    <main class="main-content" aria-label="About Chatying">
        <h1>About Chatying</h1>
        
        <div class="section">
            <h2>Our Mission</h2>
            <p>Chatying is dedicated to connecting people from all over the world in a safe, friendly, and free online chat environment. Our mission is to foster genuine connections, promote respectful conversations, and provide a platform where everyone can meet new friends without barriers.</p>
        </div>
        
        <div class="section">
            <h2>Why Choose Chatying?</h2>
            <ul>
                <li><strong>Free and Easy:</strong> No registration required. Start chatting instantly.</li>
                <li><strong>Safe & Secure:</strong> We prioritize user safety and privacy with robust moderation and clear guidelines.</li>
                <li><strong>Global Community:</strong> Meet people from different countries and cultures.</li>
                <li><strong>Modern Features:</strong> Share text, images, videos, and more in real time.</li>
                <li><strong>Mobile Friendly:</strong> Enjoy seamless chatting on any device.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Our Values</h2>
            <ul>
                <li><strong>Respect:</strong> We believe in treating everyone with kindness and dignity.</li>
                <li><strong>Inclusivity:</strong> Chatying welcomes users of all backgrounds, ages (18+), and interests.</li>
                <li><strong>Privacy:</strong> Your data is protected and never sold to third parties.</li>
                <li><strong>Fun:</strong> We want every user to enjoy their time and make lasting connections.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Join Us Today</h2>
            <p>Experience the best in online chatting. Join Chatying and become part of a vibrant, global community. <a href="{{ route('home') }}">Start chatting now!</a></p>
        </div>
    </main>
@endsection
