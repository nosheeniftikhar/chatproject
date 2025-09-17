@extends('layouts.chat')

@section('title', 'Privacy Policy - Chatying')
@section('description', 'Read Chatying\'s privacy policy to learn how we protect your data and ensure a safe, secure chat experience for all users.')
@section('keywords', 'privacy policy, chatying privacy, data protection, user privacy, online chat privacy, secure chat, GDPR compliant')
@section('canonical', route('privacy'))

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
    <main class="main-content" aria-label="Privacy Policy">
        <h1>Privacy Policy</h1>
        
        <div class="section">
            <h2>Your Privacy Matters</h2>
            <p>At Chatying, we are committed to protecting your privacy and personal information. This policy explains what data we collect, how we use it, and your rights as a user of our free chat platform.</p>
        </div>
        
        <div class="section">
            <h2>Information We Collect</h2>
            <ul>
                <li><strong>Basic Info:</strong> We only collect minimal information such as your nickname, gender, age, and country to personalize your chat experience. No registration or email is required.</li>
                <li><strong>Usage Data:</strong> We may collect anonymous usage statistics to improve our service and ensure platform security.</li>
                <li><strong>Cookies:</strong> We use cookies for session management and to enhance your experience. You can disable cookies in your browser settings.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>How We Use Your Data</h2>
            <ul>
                <li>To provide and improve our chat services.</li>
                <li>To personalize your experience and connect you with relevant users.</li>
                <li>To ensure safety, prevent abuse, and moderate content.</li>
                <li>We <strong>never</strong> sell or share your data with third parties for marketing.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Your Rights</h2>
            <ul>
                <li>You can use Chatying anonymously without registration.</li>
                <li>You may request deletion of your data by contacting us at <a href="mailto:privacy@chatying.com">privacy@chatying.com</a>.</li>
                <li>We comply with GDPR and other privacy regulations.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Contact Us</h2>
            <p>If you have questions about our privacy policy, please email <a href="mailto:privacy@chatying.com">privacy@chatying.com</a>.</p>
        </div>
    </main>
@endsection
