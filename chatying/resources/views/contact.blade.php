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
            
            <!-- Dynamic Alert Container -->
            <div id="alert-container"></div>
            
            <!-- Server-side alerts (fallback) -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" aria-label="Contact Form">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           id="name" name="name" value="{{ old('name') }}" required>
                    <div class="invalid-feedback" id="name-error"></div>
                    @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" value="{{ old('email') }}" required>
                    <div class="invalid-feedback" id="email-error"></div>
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" 
                              id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                    <div class="invalid-feedback" id="message-error"></div>
                    @error('message')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary" id="submit-btn">
                    <span class="btn-text">Send Message</span>
                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                    <span class="loading-text d-none">Sending...</span>
                </button>
            </form>
        </div>
    </main>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const alertContainer = document.getElementById('alert-container');
    const btnText = submitBtn.querySelector('.btn-text');
    const spinner = submitBtn.querySelector('.spinner-border');
    const loadingText = submitBtn.querySelector('.loading-text');

    // Function to show loading state
    function showLoading() {
        submitBtn.disabled = true;
        btnText.classList.add('d-none');
        spinner.classList.remove('d-none');
        loadingText.classList.remove('d-none');
    }

    // Function to hide loading state
    function hideLoading() {
        submitBtn.disabled = false;
        btnText.classList.remove('d-none');
        spinner.classList.add('d-none');
        loadingText.classList.add('d-none');
    }

    // Function to show alert
    function showAlert(message, type) {
        const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
        const iconClass = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle';
        
        const alertHTML = `
            <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                <i class="fas ${iconClass} me-2"></i>${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        
        alertContainer.innerHTML = alertHTML;
        alertContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    // Function to clear validation errors
    function clearValidationErrors() {
        const inputs = form.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.classList.remove('is-invalid');
            const errorDiv = document.getElementById(input.name + '-error');
            if (errorDiv) {
                errorDiv.textContent = '';
            }
        });
    }

    // Function to show validation errors
    function showValidationErrors(errors) {
        for (const [field, messages] of Object.entries(errors)) {
            const input = document.getElementById(field);
            const errorDiv = document.getElementById(field + '-error');
            
            if (input && errorDiv) {
                input.classList.add('is-invalid');
                errorDiv.textContent = messages[0];
            }
        }
    }

    // Handle form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Clear previous alerts and errors
        alertContainer.innerHTML = '';
        clearValidationErrors();
        
        // Show loading state
        showLoading();
        
        // Prepare form data
        const formData = new FormData(form);
        
        // Send AJAX request
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            hideLoading();
            
            if (data.success) {
                showAlert(data.message, 'success');
                form.reset(); // Clear the form
            } else {
                if (data.errors) {
                    showValidationErrors(data.errors);
                } else {
                    showAlert(data.message || 'An error occurred. Please try again.', 'error');
                }
            }
        })
        .catch(error => {
            hideLoading();
            console.error('Error:', error);
            showAlert('An unexpected error occurred. Please try again later.', 'error');
        });
    });

    // Auto-hide alerts after 5 seconds
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('btn-close')) {
            setTimeout(() => {
                const alert = e.target.closest('.alert');
                if (alert) {
                    alert.remove();
                }
            }, 300);
        }
    });
});
</script>
@endsection
