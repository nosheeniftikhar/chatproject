@extends('layouts.chat')

@section('title', 'Chatying Free Registration')
@section('description', 'Create your free Chatying account to access additional features and personalize your chat experience.')
@section('keywords', 'chatying registration, free chat account, sign up chatying, create chat profile')
@section('canonical', route('register'))

@section('page-styles')
        body { 
            background: #f8f9fa; 
        }
        
        .container { 
            max-width: 500px; 
            margin-top: 40px; 
        }
        
        .form-section { 
            background: #fff; 
            padding: 2rem; 
            border-radius: 10px; 
            box-shadow: 0 2px 8px rgba(0,0,0,0.08); 
        }
        
        .form-label { 
            font-weight: 500; 
        }
        
        .form-text { 
            font-size: 0.95em; 
        }

        .form-control, .form-select {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
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

        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
        }
@endsection

@section('content')
    <div class="container">
        <div class="form-section">
            <h2 class="mb-4">Chatying Free Registration</h2>
            
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
            
            <form action="{{ route('register.submit') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                
                <div class="mb-3">
                    <label for="profileImage" class="form-label">Profile Image</label>
                    <input class="form-control @error('profile_image') is-invalid @enderror" 
                           type="file" id="profileImage" name="profile_image" 
                           accept="image/jpeg,image/png,image/jpg" required>
                    <div class="form-text">Max size: 100KB. Allowed: jpeg, jpg, png.</div>
                    @error('profile_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" 
                           id="username" name="username" value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" 
                           id="dob" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                    @error('date_of_birth')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select @error('gender') is-invalid @enderror" 
                            id="gender" name="gender" required>
                        <option value="">Select</option>
                        <option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ old('gender') === 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control @error('bio') is-invalid @enderror" 
                              id="bio" name="bio" rows="2" maxlength="200" required>{{ old('bio') }}</textarea>
                    @error('bio')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="hobbies" class="form-label">Hobbies</label>
                    <input type="text" class="form-control @error('hobbies') is-invalid @enderror" 
                           id="hobbies" name="hobbies" value="{{ old('hobbies') }}" required>
                    @error('hobbies')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="profession" class="form-label">Profession</label>
                    <input type="text" class="form-control @error('profession') is-invalid @enderror" 
                           id="profession" name="profession" value="{{ old('profession') }}" required>
                    @error('profession')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Client-side validation for file upload
        document.getElementById('profileImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Profile image must be jpeg, jpg, or png.');
                    e.target.value = '';
                    return;
                }
                if (file.size > 102400) { // 100KB
                    alert('Profile image must be less than 100KB.');
                    e.target.value = '';
                    return;
                }
            }
        });
    </script>
@endsection
