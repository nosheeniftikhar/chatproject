@extends('layouts.chat')

@section('title', 'Contact Chatying - Get in Touch')
@section('description', 'Contact Chatying for support, feedback, or partnership inquiries. We\'re here to help you with your online chat experience.')
@section('keywords', 'contact chatying, chat support, chat help, chat feedback, chat partnership, online chat contact')
@section('canonical', route('contact'))

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

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--text-color);
        }

        .form-control {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(0, 188, 212, 0.2);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
            border: none;
            border-radius: 30px;
            padding: 12px 25px;
            font-weight: 600;
            color: var(--white);
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 188, 212, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 188, 212, 0.4);
            background: linear-gradient(135deg, var(--accent-hover), var(--accent-color));
        }
@endsection

@section('content')
    <main class="main-content" aria-label="Contact Chatying">
        <h1>Contact Chatying</h1>
        
        <div class="section">
            <h2>We're Here to Help</h2>
            <p>Have a question, suggestion, or need support? The Chatying team is ready to assist you. Please use the contact information below or fill out our contact form.</p>
        </div>
        
        <div class="section">
            <h2>Contact Information</h2>
            <ul>
                <li>Email: <a href="mailto:support@chatying.com">support@chatying.com</a></li>
                <li>For privacy concerns: <a href="mailto:privacy@chatying.com">privacy@chatying.com</a></li>
                <li>For partnerships: <a href="mailto:partners@chatying.com">partners@chatying.com</a></li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Contact Form</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            
            <form action="{{ route('contact.submit') }}" method="POST" aria-label="Contact Form">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" 
                              id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </main>
@endsection
