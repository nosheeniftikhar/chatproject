@extends('layouts.chat')

@section('title', 'Chatying - Free Chat Rooms, Connect Online Without Registration')
@section('description', 'Join Chatying\'s free chat rooms to meet new friends globally. No registration, no downloads, just instant online chatting.')
@section('keywords', 'free chat rooms, online chat, Chatying, meet new friends, no registration chat, anonymous chat')
@section('canonical', url('/'))

@section('page-styles')
        /* Current Time Display */
        .current-time {
            font-size: 14px;
            color: #6c757d;
            text-align: center;
            margin: 15px 0;
            font-weight: 500;
        }

        /* Main Heading */
        .main-heading {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text; /* Standard property for compatibility */
            -webkit-text-fill-color: transparent;
            margin-bottom: 25px;
            line-height: 1.3;
        }

        /* Form Section */
        .form-section {
            background-color: var(--white);
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
        }

        .form-section:hover {
            box-shadow: var(--hover-shadow);
            transform: translateY(-5px);
        }

        .form-section h3 {
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 1.4rem;
        }

        /* Form Controls */
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--text-color);
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

        /* Buttons */
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

        /* Feature Items */
        .feature-item {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 12px;
            background-color: var(--white);
            box-shadow: var(--card-shadow);
            display: flex;
            align-items: flex-start;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            margin-right: 15px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--white);
            font-size: 1.5rem;
        }

        .feature-item strong {
            color: var(--primary-color);
            font-size: 1.1rem;
            display: block;
            margin-bottom: 5px;
        }

        /* Tips Section */
        .tips-section {
            background-color: var(--white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
        }

        .tips-section:hover {
            box-shadow: var(--hover-shadow);
            transform: translateY(-5px);
        }

        .tips-section h3 {
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 1.4rem;
        }

        .tip-item {
            margin-bottom: 15px;
            padding: 15px;
            background-color: var(--light-bg);
            border-radius: 10px;
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s ease;
        }

        .tip-item:hover {
            background-color: #e8f5e9;
            transform: translateX(5px);
        }

        .tip-item strong {
            color: var(--primary-color);
        }

        /* Center Content */
        .center-content {
            text-align: center;
            margin: 40px 0;
            padding: 40px 30px;
            background: linear-gradient(135deg, rgba(26, 35, 126, 0.05), rgba(123, 31, 162, 0.05));
            border-radius: 16px;
            box-shadow: var(--card-shadow);
        }

        .center-content p {
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 20px;
            color: var(--text-color);
        }

        /* Custom modal styling */
        .modal-content {
            border: none;
            border-radius: 16px;
            box-shadow: var(--hover-shadow);
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border-radius: 16px 16px 0 0;
            border-bottom: none;
        }

        .modal-title {
            font-weight: 600;
        }

        .btn-close {
            filter: brightness(0) invert(1);
        }

        .modal-body {
            padding: 30px;
        }

        .regonly {
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .vipImageList {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        .vipImageList li {
            margin-bottom: 15px;
            align-items: center;
            display: flex;
        }

        .modal_list {
            width: 24px;
            height: 24px;
            margin-right: 10px;
            color: var(--accent-color);
        }

        .age_modal_actions {
            justify-content: center;
            margin-top: 25px;
            display: flex;
        }

        .confirm_decline {
            margin: 0 10px;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 500;
        }

        .agree {
            background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
            border: none;
            color: var(--white);
        }

        .disagree {
            background-color: #e0e0e0;
            border: none;
            color: var(--text-color);
        }

        .agree:hover, .disagree:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-heading {
                font-size: 24px;
            }
        }
@endsection

@section('content')
    <!-- Current Time Display -->
    <div class="container">
        <div class="current-time">
            Current time: <span id="currentTime"></span>
        </div>
    </div>

    <!-- Main Content Area -->
    <main class="container">
        <div class="row">
            <!-- Left Column: Join Chatying Free -->
            <div class="col-md-4">
                <h1 class="main-heading">Free Chat Rooms, Connect Online Without Registration</h1>
                <p>Chatying is a free chat room platform where you can meet new friends from around the world. No downloads, no setup, and no registration required.</p>

                <!-- Feature Items -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-user-friends" aria-hidden="true" alt="Friendly community icon"></i>
                    </div>
                    <div>
                        <strong>Friendly</strong>
                        Meet new single women and men every day without limits, make friendships, and enjoy live discussions instantly.
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-envelope" aria-hidden="true" alt="Simple chat icon"></i>
                    </div>
                    <div>
                        <strong>Simple</strong>
                        Enter your nickname and start chatting with new people instantly—no complicated setup required.
                    </div>
                </div>
            </div>

            <!-- Middle Column: Chat Form -->
            <div class="col-md-4">
                <section class="form-section" aria-labelledby="chat-form-heading">
                    <h2 id="chat-form-heading">Start Chatting Now</h2>
                    <form id="chatForm" aria-label="Chatying join form" action="{{ route('chat.enter') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nickname" class="form-label">Choose a Nickname</label>
                            <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Enter your nickname" required aria-describedby="nicknameHelp">
                            <div id="nicknameHelp" class="form-text">Your nickname is how others will see you in the chat.</div>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required aria-describedby="genderHelp">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            <div id="genderHelp" class="form-text">Select your gender to personalize your chat experience.</div>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <select class="form-select" id="age" name="age" required aria-describedby="ageHelp">
                                <option value="">Select Age</option>
                                <!-- Age options will be populated dynamically via JavaScript -->
                            </select>
                            <div id="ageHelp" class="form-text">You must be 18 or older to join.</div>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country" required onchange="populateStates()" aria-describedby="countryHelp">
                                <option value="">Select Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <!-- Add more countries as needed -->
                            </select>
                            <div id="countryHelp" class="form-text">Select your country to connect with local users.</div>
                        </div>
                        <div class="mb-3" id="stateContainer" style="display: none;">
                            <label for="state" class="form-label">State/Province</label>
                            <select class="form-select" id="state" name="state" aria-describedby="stateHelp">
                                <option value="">Select State/Province</option>
                            </select>
                            <div id="stateHelp" class="form-text">Select your state or province, if applicable.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enter Chat Room</button>
                    </form>
                </section>
            </div>

            <!-- Right Column: Online Chat Tips -->
            <div class="col-md-4">
                <section class="tips-section" aria-labelledby="tips-heading">
                    <h2 id="tips-heading">Online Chat Tips</h2>
                    <div class="tip-item">
                        <strong>Be Respectful:</strong> Treat others with kindness and respect in all conversations.
                    </div>
                    <div class="tip-item">
                        <strong>Stay Safe:</strong> Never share personal information like your address or phone number.
                    </div>
                    <div class="tip-item">
                        <strong>Have Fun:</strong> Enjoy meeting new people and making friends from around the world.
                    </div>
                    <div class="tip-item">
                        <strong>Report Issues:</strong> Use the <a href="#" onclick="showHelp()">report feature</a> if someone is being inappropriate.
                    </div>
                    <div class="tip-item">
                        <strong>Be Patient:</strong> Good conversations take time to develop, so be patient with new connections.
                    </div>
                </section>
            </div>
        </div>
    </main>
    
    <div class="container">
        <div id="session-expired-alert" class="alert alert-danger" role="alert" style="display: none;">
            Your session has expired. Please log in again.
        </div>
    </div>

    <!-- Centered Paragraph Section -->
    <section class="container">
        <div class="center-content">
            <p>Welcome to <a href="{{ url('/') }}">Chatying</a>, a free chat platform connecting people worldwide for friendship and conversation in a safe, moderated environment.</p>
            <p>Join thousands of users for authentic, cost-free connections; choose a nickname above to start chatting with global enthusiasts today.</p>
            <p>Experience anonymous, lasting relationships and discover why Chatying is a top choice for <a href="#chat-form-heading">online chatting</a>.</p>
        </div>
    </section>
@endsection

@section('structured-data')
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Chatying",
        "url": "{{ url('/') }}",
        "description": "Chatying is a free chat room platform to connect with people worldwide without registration.",
        "publisher": {
            "@type": "Organization",
            "name": "Chatying",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('images/logo.png') }}"
            }
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ url('/search?q={search_term_string}') }}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
@endsection

@section('scripts')
    <!-- Custom JavaScript -->
    <script defer>
        // Update current time every second
        function updateTime() {
            const now = new Date();
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                hour12: true,
                timeZoneName: 'short'
            };
            const timeString = now.toLocaleString(undefined, options);
            document.getElementById('currentTime').textContent = timeString;
        }

        // Update time immediately and then every second
        updateTime();
        setInterval(updateTime, 1000);

        // Populate age dropdown
        function populateAgeDropdown() {
            const ageSelect = document.getElementById('age');
            for (let age = 18; age <= 100; age++) {
                const option = document.createElement('option');
                option.value = age;
                option.textContent = age;
                ageSelect.appendChild(option);
            }
        }

        // Function to populate states based on country selection
        function populateStates() {
            const countrySelect = document.getElementById('country');
            const stateSelect = document.getElementById('state');
            const stateContainer = document.getElementById('stateContainer');
            const selectedCountry = countrySelect.value;

            // Clear existing options
            stateSelect.innerHTML = '<option value="">Select State/Province</option>';

            // Show state dropdown only for countries with states
            if (selectedCountry === 'United States') {
                stateContainer.style.display = 'block';
                const states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia'];
                states.forEach(state => {
                    const option = document.createElement('option');
                    option.value = state;
                    option.textContent = state;
                    stateSelect.appendChild(option);
                });
            } else if (selectedCountry === 'Canada') {
                stateContainer.style.display = 'block';
                const provinces = ['Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland and Labrador', 'Nova Scotia', 'Ontario', 'Prince Edward Island', 'Quebec', 'Saskatchewan'];
                provinces.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province;
                    option.textContent = province;
                    stateSelect.appendChild(option);
                });
            } else {
                stateContainer.style.display = 'none';
            }
        }

        function showHelp() {
            window.location.href = '{{ route("help") }}';
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            populateAgeDropdown();
        });
    </script>
@endsection
