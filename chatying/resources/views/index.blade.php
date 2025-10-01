<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatying - Free Chat Rooms, Connect Online Without Registration</title>
    <meta name="description" content="Join Chatying's free chat rooms to meet new friends globally. No registration, no downloads, just instant online chatting.">
    <meta name="keywords" content="free chat rooms, online chat, Chatying, meet new friends, no registration chat, anonymous chat">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Chatying Team">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Chatying - Free Chat Rooms, Connect Online Without Registration">
    <meta property="og:description" content="Join Chatying to chat online with people worldwide. No registration or downloads needed for instant connections.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:site_name" content="Chatying">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Chatying - Free Chat Rooms, Connect Online Without Registration">
    <meta name="twitter:description" content="Join Chatying to chat online with people worldwide. No registration or downloads needed for instant connections.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" as="style">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #1a237e;
            --secondary-color: #7b1fa2;
            --accent-color: #00bcd4;
            --accent-hover: #ff5722;
            --light-bg: #f5f7fa;
            --white: #FFFFFF;
            --text-color: #333333;
            --card-shadow: 0 4px 12px rgba(0,0,0,0.08);
            --hover-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Navbar Styles */
        .navbar {
            background: rgb(20, 20, 49);
            box-shadow: 0 4px 12px rgba(204, 188, 188, 0.1); 
            padding: 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--white) !important;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand i {
            font-size: 2rem;
            color: var(--accent-color);
        }

        .navbar-text {
            color: var(--white) !important;
            font-weight: 500;
            font-size: 1rem;
        }

        .navbar-nav .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            margin: 0 8px;
            border-radius: 20px;
            padding: 6px 15px !important;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255,255,255,0.15);
            transform: translateY(-2px);
        }

        /* Current Time Display */
        .current-time {
            font-size: 16px;
            color: #333;
            text-align: center;
            margin: 20px 0;
            font-weight: 600;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 12px;
            padding: 15px 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-left: 4px solid var(--accent-color);
        }
        
        .time-section {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .main-time {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .date-info {
            font-size: 14px;
            color: #666;
            font-weight: 500;
        }
        
        .timezone-info {
            font-size: 12px;
            color: #888;
            font-style: italic;
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

        /* Footer */
                .footer {
            background: rgb(20, 20, 49);
            color: var(--white);
            padding: 0;
            margin-top: 0;
            line-height: 1;
        }

        .footer-logo {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--white);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-logo i {
            font-size: 2rem;
            color: var(--accent-color);
        }

        .footer a {
            color: var(--white);
            text-decoration: none;
            margin: 0 00px;
            font-weight: 300;
            transition: all 0.3s ease;
            display: inline-block;
            
        }

        .footer a:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-heading {
                font-size: 24px;
            }

            .navbar {
                padding: 0px 0;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }

            .footer-logo {
                font-size: 1.5rem;
                text-align: center;
                margin-bottom: 00px;
                justify-content: center;
            }

            .footer {
                text-align: center;
            }

            .footer a {
                margin: 0px 0px;
            }
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
    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <nav class="navbar navbar-expand-lg" aria-label="Main navigation">
        <div class="container">
            <!-- Left: Logo + Chatying text -->
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center me-4" style="text-decoration: none;">
                <img src="{{ asset('images/logo2.png') }}" alt="Chatying logo" style="width: 48px; height: 48px; margin-right: 8px;">
                <span style="font-weight: bold; font-size: 1.5rem;">Chatying</span>
            </a>
            <!-- Center/Right: Nav links spaced out -->
            <div class="d-flex flex-grow-1 justify-content-end align-items-center">
                <a href="{{ route('about') }}" aria-label="About Chatying" style="margin: 0 18px;color: var(--white);">About Us</a>
                <a href="{{ route('privacy') }}" aria-label="Chatying Privacy Policy" style="margin: 0 18px;color: var(--white);">Privacy Policy</a>
                <a href="{{ route('terms') }}" aria-label="Chatying Terms of Service" style="margin: 0 18px;color: var(--white);">Terms of Service</a>
                <a href="{{ route('contact') }}" aria-label="Contact Chatying" style="margin: 0 18px;color: var(--white);">Contact</a>
                <a href="{{ route('help') }}" aria-label="Chatying Help" style="margin: 0 18px;color: var(--white);">Help</a>
                <a href="{{ route('safety') }}" aria-label="Chatying Safety Guidelines" style="margin: 0 18px;color: var(--white);">Safety Guidelines</a>
            </div>
        </div>
    </nav>

    <!-- Current Time Display -->
    <div class="container">
        <div class="current-time">
            <div class="time-section">
                <div class="main-time" id="currentTime"></div>
                <div class="date-info" id="currentDate"></div>
                <div class="timezone-info" id="timezoneInfo"></div>
            </div>
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
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form id="chatForm" action="{{ route('chat.enter') }}" method="POST" aria-label="Chatying join form">
                        @csrf
                        <div class="mb-3">
                            <label for="nickname" class="form-label">Choose a Nickname</label>
                            <input type="text" class="form-control @error('nickname') is-invalid @enderror" id="nickname" name="nickname" placeholder="Enter your nickname" value="{{ old('nickname') }}" required aria-describedby="nicknameHelp">
                            <div id="nicknameHelp" class="form-text">Your nickname is how others will see you in the chat.</div>
                            @error('nickname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" required aria-describedby="genderHelp">
                                <option value="">Select Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            <div id="genderHelp" class="form-text">Select your gender to personalize your chat experience.</div>
                            @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <select class="form-select @error('age') is-invalid @enderror" id="age" name="age" required aria-describedby="ageHelp">
                                <option value="">Select Age</option>
                                <option value="18" {{ old('age') == '18' ? 'selected' : '' }}>18</option>
                                <option value="19" {{ old('age') == '19' ? 'selected' : '' }}>19</option>
                                <option value="20" {{ old('age') == '20' ? 'selected' : '' }}>20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65">65</option>
                                <option value="66">66</option>
                                <option value="67">67</option>
                                <option value="68">68</option>
                                <option value="69">69</option>
                                <option value="70">70</option>
                                <option value="71">71</option>
                                <option value="72">72</option>
                                <option value="73">73</option>
                                <option value="74">74</option>
                                <option value="75">75</option>
                                <option value="76">76</option>
                                <option value="77">77</option>
                                <option value="78">78</option>
                                <option value="79">79</option>
                                <option value="80">80</option>
                                <option value="81">81</option>
                                <option value="82">82</option>
                                <option value="83">83</option>
                                <option value="84">84</option>
                                <option value="85">85</option>
                                <option value="86">86</option>
                                <option value="87">87</option>
                                <option value="88">88</option>
                                <option value="89">89</option>
                                <option value="90">90</option>
                                <option value="91">91</option>
                                <option value="92">92</option>
                                <option value="93">93</option>
                                <option value="94">94</option>
                                <option value="95">95</option>
                                <option value="96">96</option>
                                <option value="97">97</option>
                                <option value="98">98</option>
                                <option value="99">99</option>
                            </select>
                            <div id="ageHelp" class="form-text">You must be 18 or older to join.</div>
                            @error('age')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select @error('country') is-invalid @enderror" id="country" name="country" required onchange="populateStates()" aria-describedby="countryHelp">
                                <option value="">Select Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                <option value="Congo, Republic of the">Congo, Republic of the</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Eswatini">Eswatini</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Greece">Greece</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, North">Korea, North</option>
                                <option value="Korea, South">Korea, South</option>
                                <option value="Kosovo">Kosovo</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="North Macedonia">North Macedonia</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City">Vatican City</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            <div id="countryHelp" class="form-text">Select your country to connect with local users.</div>
                            @error('country')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3" id="stateContainer" style="display: none;">
                            <label for="state" class="form-label">State/Province</label>
                            <select class="form-select @error('state') is-invalid @enderror" id="state" name="state" aria-describedby="stateHelp">
                                <option value="">Select State/Province</option>
                            </select>
                            <div id="stateHelp" class="form-text">Select your state or province, if applicable.</div>
                            @error('state')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
            <p>Welcome to <a href="{{ route('home') }}">Chatying</a>, a free chat platform connecting people worldwide for friendship and conversation in a safe, moderated environment.</p>
            <p>Join thousands of users for authentic, cost-free connections; choose a nickname above to start chatting with global enthusiasts today.</p>
            <p>Experience anonymous, lasting relationships and discover why Chatying is a top choice for <a href="#chat-form-heading">online chatting</a>.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" aria-label="Footer navigation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="{{ route('home') }}" class="footer-logo" style="text-decoration: none; color: inherit;">
                        <img src="{{ asset('images/logo2.png') }}" alt="Chatying footer logo" style="width: 80px; height: 80px;">
                        Chatying
                    </a>
                </div>
                <div class="col-md-9 text-md-end text-center">
                    <a href="{{ route('about') }}" aria-label="About Chatying" style="margin: 0 18px;">About Us</a>
                    <a href="{{ route('privacy') }}" aria-label="Chatying Privacy Policy" style="margin: 0 18px;">Privacy Policy</a>
                    <a href="{{ route('terms') }}" aria-label="Chatying Terms of Service" style="margin: 0 18px;">Terms of Service</a>
                    <a href="{{ route('contact') }}" aria-label="Contact Chatying" style="margin: 0 18px;">Contact</a>
                    <a href="{{ route('help') }}" aria-label="Chatying Help" style="margin: 0 18px;">Help</a>
                    <a href="{{ route('safety') }}" aria-label="Chatying Safety Guidelines" style="margin: 0 18px;">Safety Guidelines</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <small>&copy; 2025 Chatying. All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>

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
            "target": "{{ url('/search') }}?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Custom JavaScript -->
    <script defer>
        // Comprehensive multilingual profanity filter
        function getProfanityWords() {
            return [
                // English profanity and inappropriate words
                'fuck', 'shit', 'bitch', 'asshole', 'damn', 'crap', 'piss', 'dick', 'cock', 'pussy', 'cunt', 'whore', 'slut', 'bastard', 'motherfucker',
                'nigger', 'nigga', 'faggot', 'retard', 'gay', 'lesbian', 'homo', 'queer', 'tranny', 'dyke',
                'sex', 'porn', 'xxx', 'nude', 'naked', 'boobs', 'tits', 'ass', 'butt', 'penis', 'vagina', 'orgasm', 'masturbate', 'cum', 'sperm',
                'rape', 'molest', 'pedophile', 'incest', 'bdsm', 'fetish', 'kinky', 'horny', 'erotic', 'vibrator', 'dildo',
                'kill', 'murder', 'suicide', 'bomb', 'terrorist', 'nazi', 'hitler', 'drugs', 'cocaine', 'heroin', 'weed', 'marijuana',
                
                // Hindi/Urdu profanity
                'gand', 'gandu', 'chutiya', 'madarchod', 'bhenchod', 'behenchod', 'randi', 'randwa', 'kamina', 'kutta', 'kutiya',
                'saala', 'saali', 'harami', 'haramkhor', 'chod', 'chodna', 'chudai', 'lund', 'loda', 'phuddi', 'choot', 'gaandu',
                'bhosda', 'bhosadi', 'raand', 'chinaal', 'pataka', 'item', 'maal', 'sexy', 'hot', 'nangi', 'nanga',
                'chus', 'choos', 'chusna', 'choosa', 'suck', 'sucker', 'bhabi', 'bhabhi', 'aunty', 'uncle',
                
                // Arabic profanity
                'haram', 'hara', 'kalb', 'klab', 'kus', 'tiz', 'air', 'khara', 'ibn', 'sharmouta', 'kahba',
                
                // Spanish profanity
                'puta', 'puto', 'mierda', 'joder', 'coño', 'cabrón', 'pendejo', 'gilipollas', 'hijo', 'perra',
                'maricón', 'bollera', 'tortillera', 'pajero', 'follar', 'sexo', 'desnudo', 'tetas', 'culo',
                
                // French profanity
                'merde', 'putain', 'salope', 'connard', 'pédé', 'tapette', 'enculé', 'baiser', 'chatte', 'bite',
                'cul', 'nichons', 'seins', 'nue', 'sexe', 'bordel',
                
                // German profanity
                'scheiße', 'scheisse', 'verdammt', 'arschloch', 'fotze', 'hure', 'nutte', 'schwanz', 'muschi',
                'titten', 'nackt', 'ficken', 'bumsen', 'schwul', 'lesbe',
                
                // Italian profanity
                'merda', 'cazzo', 'fica', 'puttana', 'troia', 'stronzo', 'fottere', 'scopare', 'nudo', 'tette',
                
                // Russian profanity (transliterated)
                'suka', 'blyad', 'pizda', 'khuy', 'mudak', 'govno', 'yebat', 'trakhat', 'goliy', 'siski',
                
                // Portuguese profanity
                'merda', 'porra', 'caralho', 'buceta', 'puta', 'filho', 'foder', 'transar', 'pelado', 'peitos',
                
                // Other inappropriate terms
                'virgin', 'slut', 'whore', 'prostitute', 'escort', 'hooker', 'stripper', 'cam', 'webcam', 'onlyfans',
                'dating', 'hookup', 'one', 'night', 'stand', 'fwb', 'netflix', 'chill', 'dtf', 'nsa',
                'top', 'bottom', 'dom', 'sub', 'daddy', 'mommy', 'master', 'slave', 'mistress',
                'licking', 'sucking', 'fingering', 'touching', 'groping', 'fondling', 'caressing', 'kissing',
                'blowjob', 'handjob', 'footjob', 'rimjob', 'anal', 'oral', 'threesome', 'gangbang', 'orgy',
                
                // Leetspeak and variations
                'f*ck', 'f**k', 'f***', 'sh*t', 'sh**', 'b*tch', 'b**ch', 'a**hole', 'a****le',
                'fuk', 'fck', 'fvck', 'phuck', 'shyt', 'sht', 'biatch', 'biotch', 'azz',
                's3x', 'p0rn', 'pr0n', 'n00ds', 'b00bs', 't1ts', 'a55', 'p3n15', 'v4g1n4',
                
                // Numbers/symbols used inappropriately
                '69', '420', '18+', 'nsfw', 'xxx',
                
                // Common misspellings and variations
                'phuk', 'phuck', 'shiet', 'shieet', 'bytch', 'byatch', 'azhole', 'azz hole',
                'fukc', 'fcuk', 'fuk', 'shiit', 'shiet', 'btch', 'biatch', 'hore', 'wh0re',
                
                // Regional slang and variations
                'thot', 'simp', 'incel', 'chad', 'karen', 'boomer', 'zoomer', 'milf', 'dilf',
                'smash', 'bang', 'tap', 'hit', 'pipe', 'rail', 'pound', 'drill', 'slam'
            ];
        }
        
        // Profanity filter function
        function filterProfanity(text) {
            const profanityWords = getProfanityWords();
            let filteredText = text;
            
            profanityWords.forEach(word => {
                // Create regex with word boundaries to avoid false positives
                const regex = new RegExp('\\b' + word.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') + '\\b', 'gi');
                filteredText = filteredText.replace(regex, '*'.repeat(word.length));
            });
            
            return filteredText;
        }
        
        // Check if text contains profanity
        function containsProfanity(text) {
            const profanityWords = getProfanityWords();
            
            return profanityWords.some(word => {
                // Create regex with word boundaries to avoid false positives
                const regex = new RegExp('\\b' + word.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') + '\\b', 'gi');
                return regex.test(text);
            });
        }
        
        // Update current time every second with enhanced display
        function updateTime() {
            const now = new Date();
            
            // Get the user's timezone and locale automatically
            const userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            const userLocale = navigator.language || 'en-US';
            
            // Time options
            const timeOptions = {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true,
                timeZone: userTimezone
            };
            
            // Date options
            const dateOptions = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                timeZone: userTimezone
            };
            
            // Format time and date separately
            const timeString = now.toLocaleString(userLocale, timeOptions);
            const dateString = now.toLocaleString(userLocale, dateOptions);
            
            // Get timezone name in short format
            const timezoneName = now.toLocaleString(userLocale, {
                timeZoneName: 'short',
                timeZone: userTimezone
            }).split(' ').pop();
            
            // Get country/region information
            const region = getRegionFromTimezone(userTimezone);
            
            // Update the display elements
            const currentTimeEl = document.getElementById('currentTime');
            const currentDateEl = document.getElementById('currentDate');
            const timezoneInfoEl = document.getElementById('timezoneInfo');
            
            if (currentTimeEl) currentTimeEl.textContent = timeString;
            if (currentDateEl) currentDateEl.textContent = dateString;
            if (timezoneInfoEl) {
                timezoneInfoEl.textContent = `${timezoneName} • ${region} • ${userTimezone}`;
            }
        }
        
        // Function to get region from timezone
        function getRegionFromTimezone(timezone) {
            const regionMap = {
                // Americas
                'America/New_York': 'United States (Eastern)',
                'America/Chicago': 'United States (Central)',
                'America/Denver': 'United States (Mountain)',
                'America/Los_Angeles': 'United States (Pacific)',
                'America/Anchorage': 'United States (Alaska)',
                'Pacific/Honolulu': 'United States (Hawaii)',
                'America/Toronto': 'Canada (Eastern)',
                'America/Vancouver': 'Canada (Pacific)',
                'America/Mexico_City': 'Mexico',
                'America/Sao_Paulo': 'Brazil',
                'America/Argentina/Buenos_Aires': 'Argentina',
                'America/Lima': 'Peru',
                'America/Bogota': 'Colombia',
                'America/Santiago': 'Chile',
                
                // Europe
                'Europe/London': 'United Kingdom',
                'Europe/Dublin': 'Ireland',
                'Europe/Paris': 'France',
                'Europe/Berlin': 'Germany',
                'Europe/Rome': 'Italy',
                'Europe/Madrid': 'Spain',
                'Europe/Amsterdam': 'Netherlands',
                'Europe/Brussels': 'Belgium',
                'Europe/Zurich': 'Switzerland',
                'Europe/Vienna': 'Austria',
                'Europe/Stockholm': 'Sweden',
                'Europe/Oslo': 'Norway',
                'Europe/Copenhagen': 'Denmark',
                'Europe/Helsinki': 'Finland',
                'Europe/Warsaw': 'Poland',
                'Europe/Prague': 'Czech Republic',
                'Europe/Budapest': 'Hungary',
                'Europe/Bucharest': 'Romania',
                'Europe/Sofia': 'Bulgaria',
                'Europe/Athens': 'Greece',
                'Europe/Moscow': 'Russia',
                'Europe/Kiev': 'Ukraine',
                'Europe/Istanbul': 'Turkey',
                
                // Asia
                'Asia/Tokyo': 'Japan',
                'Asia/Shanghai': 'China',
                'Asia/Hong_Kong': 'Hong Kong',
                'Asia/Singapore': 'Singapore',
                'Asia/Bangkok': 'Thailand',
                'Asia/Jakarta': 'Indonesia',
                'Asia/Manila': 'Philippines',
                'Asia/Seoul': 'South Korea',
                'Asia/Taipei': 'Taiwan',
                'Asia/Kolkata': 'India',
                'Asia/Karachi': 'Pakistan',
                'Asia/Dhaka': 'Bangladesh',
                'Asia/Dubai': 'United Arab Emirates',
                'Asia/Riyadh': 'Saudi Arabia',
                'Asia/Tehran': 'Iran',
                'Asia/Baghdad': 'Iraq',
                'Asia/Jerusalem': 'Israel',
                
                // Africa
                'Africa/Cairo': 'Egypt',
                'Africa/Lagos': 'Nigeria',
                'Africa/Johannesburg': 'South Africa',
                'Africa/Nairobi': 'Kenya',
                'Africa/Casablanca': 'Morocco',
                'Africa/Algiers': 'Algeria',
                'Africa/Tunis': 'Tunisia',
                
                // Oceania
                'Australia/Sydney': 'Australia (Eastern)',
                'Australia/Melbourne': 'Australia (Eastern)',
                'Australia/Perth': 'Australia (Western)',
                'Australia/Adelaide': 'Australia (Central)',
                'Australia/Darwin': 'Australia (Central)',
                'Pacific/Auckland': 'New Zealand',
                'Pacific/Fiji': 'Fiji'
            };
            
            // Return mapped region or extract from timezone
            if (regionMap[timezone]) {
                return regionMap[timezone];
            }
            
            // Fallback: extract region from timezone string
            const parts = timezone.split('/');
            if (parts.length >= 2) {
                const continent = parts[0].replace(/_/g, ' ');
                const city = parts[parts.length - 1].replace(/_/g, ' ');
                return `${continent} (${city})`;
            }
            
            return timezone;
        }
        
        // Enhanced initialization function with additional browser info
        function initializeTimeDisplay() {
            // Update time immediately
            updateTime();
            
            // Add browser and system information to timezone display
            setTimeout(() => {
                const timezoneInfoEl = document.getElementById('timezoneInfo');
                if (timezoneInfoEl) {
                    const currentText = timezoneInfoEl.textContent;
                    const browserInfo = getBrowserInfo();
                    timezoneInfoEl.textContent = currentText + ` • ${browserInfo}`;
                }
            }, 100);
        }
        
        // Function to get browser information
        function getBrowserInfo() {
            const userAgent = navigator.userAgent;
            let browserName = 'Unknown';
            
            if (userAgent.includes('Chrome') && !userAgent.includes('Edg')) {
                browserName = 'Chrome';
            } else if (userAgent.includes('Firefox')) {
                browserName = 'Firefox';
            } else if (userAgent.includes('Safari') && !userAgent.includes('Chrome')) {
                browserName = 'Safari';
            } else if (userAgent.includes('Edg')) {
                browserName = 'Edge';
            } else if (userAgent.includes('Opera') || userAgent.includes('OPR')) {
                browserName = 'Opera';
            }
            
            const platform = navigator.platform || 'Unknown Platform';
            return `${browserName} on ${platform}`;
        }
        
        // Function to get additional location info (optional)
        function addLocationInfo() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const lat = position.coords.latitude.toFixed(2);
                        const lng = position.coords.longitude.toFixed(2);
                        
                        const timezoneInfoEl = document.getElementById('timezoneInfo');
                        if (timezoneInfoEl && !timezoneInfoEl.textContent.includes('Coordinates')) {
                            timezoneInfoEl.textContent += ` • Coordinates: ${lat}°, ${lng}°`;
                        }
                    },
                    function(error) {
                        // Silently fail if location access is denied
                        console.log('Location access not available:', error.message);
                    },
                    {
                        enableHighAccuracy: false,
                        timeout: 5000,
                        maximumAge: 600000 // 10 minutes
                    }
                );
            }
        }

        // Initialize enhanced time display and update every second
        initializeTimeDisplay();
        setInterval(updateTime, 1000);
        
        // Optionally add location coordinates (with user permission)
        setTimeout(addLocationInfo, 2000);

        // Note: Form now submits directly to Laravel backend - no need for JavaScript submission

        // Navigation functions
        function showLogin() {
            alert('Login functionality - This is a demo. In a real implementation, this would open a login modal or redirect to a login page.');
        }

        function showRegistration() {
            alert('Registration functionality - This is a demo. In a real implementation, this would open a registration form.');
        }

        function showAbout() {
            alert('About Us - Learn more about Chatying's mission to connect people worldwide.');
        }

        function showPrivacy() {
            alert('Privacy Policy - View Chatying's privacy policy for details on data protection.');
        }

        function showTerms() {
            alert('Terms of Service - Review Chatying's terms for using our platform.');
        }

        function showContact() {
            alert('Contact - Reach out to Chatying's support team for assistance.');
        }

        function showHelp() {
            alert('Help - Access Chatying's help documentation for user support.');
        }

        function showSafety() {
            alert('Safety Guidelines - Follow Chatying's guidelines for a safe chatting experience.');
        }

        // Add form validation for nickname profanity check
        document.getElementById('chatForm').addEventListener('submit', function(e) {
            const nicknameInput = document.getElementById('nickname');
            const nickname = nicknameInput.value.trim();
            
            if (containsProfanity(nickname)) {
                e.preventDefault();
                alert('Please choose a different nickname. The nickname you entered contains inappropriate content.');
                nicknameInput.focus();
                return false;
            }
        });
        
        // Add real-time validation as user types
        document.getElementById('nickname').addEventListener('input', function(e) {
            const nickname = e.target.value.trim();
            const helpText = document.getElementById('nicknameHelp');
            
            if (containsProfanity(nickname)) {
                e.target.classList.add('is-invalid');
                helpText.textContent = 'Please choose a different nickname. This contains inappropriate content.';
                helpText.style.color = '#dc3545';
            } else {
                e.target.classList.remove('is-invalid');
                helpText.textContent = 'Your nickname is how others will see you in the chat.';
                helpText.style.color = '#6c757d';
            }
        });
        
        // Function to populate states based on country selection
        function populateStates() {
            console.log('populateStates called'); // Debug log
            
            const countrySelect = document.getElementById('country');
            const stateSelect = document.getElementById('state');
            const stateContainer = document.getElementById('stateContainer');
            
            if (!countrySelect || !stateSelect || !stateContainer) {
                console.error('Required elements not found:', {countrySelect, stateSelect, stateContainer});
                return;
            }
            
            const selectedCountry = countrySelect.value;
            console.log('Selected country:', selectedCountry); // Debug log

            // Clear existing options
            stateSelect.innerHTML = '<option value="">Select State/Province</option>';

            // Show state dropdown only for countries with states
            if (selectedCountry) {
                stateContainer.style.display = 'block';
                let states = [];
                switch (selectedCountry) {
                    case 'Afghanistan':
                        states = ['Badakhshan', 'Badghis', 'Baghlan', 'Balkh', 'Bamyan', 'Daykundi', 'Farah', 'Faryab', 'Ghazni', 'Ghor', 'Helmand', 'Herat', 'Jowzjan', 'Kabul', 'Kandahar', 'Kapisa', 'Khost', 'Kunar', 'Laghman', 'Logar', 'Nangarhar', 'Nimroz', 'Nuristan', 'Paktia', 'Paktika', 'Panjshir', 'Parwan', 'Samangan', 'Sar-e Pol', 'Takhar', 'Urozgan', 'Wardak', 'Zabul'];
                        break;
                    case 'Albania':
                        states = ['Berat', 'Dibër', 'Durrës', 'Elbasan', 'Fier', 'Gjirokastër', 'Korçë', 'Kukës', 'Lezhë', 'Shkodër', 'Tirana', 'Vlorë'];
                        break;
                    case 'Algeria':
                        states = ['Adrar', 'Aïn Defla', 'Aïn Témouchent', 'Algiers', 'Annaba', 'Batna', 'Béchar', 'Béjaïa', 'Biskra', 'Blida', 'Bordj Bou Arréridj', 'Bouira', 'Boumerdès', 'Chlef', 'Constantine', 'Djelfa', 'El Bayadh', 'El Oued', 'El Tarf', 'Ghardaïa', 'Guelma', 'Illizi', 'Jijel', 'Khenchela', 'Laghouat', 'Mascara', 'Médéa', 'Mila', 'Mostaganem', 'Msila', 'Naama', 'Oran', 'Ouargla', 'Oum El Bouaghi', 'Relizane', 'Saïda', 'Sétif', 'Sidi Bel Abbès', 'Skikda', 'Souk Ahras', 'Tamanghasset', 'Tébessa', 'Tiaret', 'Tindouf', 'Tipaza', 'Tissemsilt', 'Tizi Ouzou', 'Tlemcen'];
                        break;
                    case 'Andorra':
                        states = ['Andorra la Vella', 'Canillo', 'Encamp', 'Escaldes-Engordany', 'La Massana', 'Ordino', 'Sant Julià de Lòria'];
                        break;
                    case 'Angola':
                        states = ['Bengo', 'Benguela', 'Bié', 'Cabinda', 'Cuando Cubango', 'Cuanza Norte', 'Cuanza Sul', 'Cunene', 'Huambo', 'Huíla', 'Luanda', 'Lunda Norte', 'Lunda Sul', 'Malanje', 'Moxico', 'Namibe', 'Uíge', 'Zaire'];
                        break;
                    case 'Antigua and Barbuda':
                        states = ['Barbuda', 'Redonda', 'Saint George', 'Saint John', 'Saint Mary', 'Saint Paul', 'Saint Peter', 'Saint Philip'];
                        break;
                    case 'Argentina':
                        states = ['Buenos Aires', 'Catamarca', 'Chaco', 'Chubut', 'Córdoba', 'Corrientes', 'Entre Ríos', 'Formosa', 'Jujuy', 'La Pampa', 'La Rioja', 'Mendoza', 'Misiones', 'Neuquén', 'Río Negro', 'Salta', 'San Juan', 'San Luis', 'Santa Cruz', 'Santa Fe', 'Santiago del Estero', 'Tierra del Fuego', 'Tucumán'];
                        break;
                    case 'Armenia':
                        states = ['Aragatsotn', 'Ararat', 'Armavir', 'Gegharkunik', 'Kotayk', 'Lori', 'Shirak', 'Syunik', 'Tavush', 'Vayots Dzor', 'Yerevan'];
                        break;
                    case 'Australia':
                        states = ['New South Wales', 'Queensland', 'South Australia', 'Tasmania', 'Victoria', 'Western Australia', 'Australian Capital Territory', 'Northern Territory'];
                        break;
                    case 'Austria':
                        states = ['Burgenland', 'Carinthia', 'Lower Austria', 'Salzburg', 'Styria', 'Tyrol', 'Upper Austria', 'Vienna', 'Vorarlberg'];
                        break;
                    case 'Azerbaijan':
                        states = ['Absheron', 'Agjabadi', 'Agdam', 'Agdash', 'Aghstafa', 'Agsu', 'Astara', 'Babek', 'Baku', 'Balakan', 'Barda', 'Beylagan', 'Bilasuvar', 'Dashkasan', 'Fuzuli', 'Gadabay', 'Ganja', 'Gobustan', 'Goychay', 'Goygol', 'Hajigabul', 'Imishli', 'Ismailli', 'Jabrayil', 'Jalilabad', 'Julfa', 'Kalbajar', 'Kangarli', 'Khachmaz', 'Khankendi', 'Khyzy', 'Khojali', 'Kurdamir', 'Lachin', 'Lankaran', 'Lerik', 'Masally', 'Mingachevir', 'Naftalan', 'Nakhchivan', 'Neftchala', 'Oghuz', 'Ordubad', 'Qabala', 'Qakh', 'Qazakh', 'Quba', 'Qubadli', 'Qusar', 'Saatly', 'Sabirabad', 'Sadarak', 'Salyan', 'Samukh', 'Shabran', 'Shahbuz', 'Shaki', 'Sharur', 'Shirvan', 'Shusha', 'Siazan', 'Sabran', 'Sumqayit', 'Tartar', 'Tovuz', 'Ujar', 'Yardimli', 'Yevlakh', 'Zangilan', 'Zaqatala', 'Zardab'];
                        break;
                    case 'Bahamas':
                        states = ['Acklins', 'Berry Islands', 'Bimini', 'Black Point', 'Cat Island', 'Central Abaco', 'Central Andros', 'Central Eleuthera', 'Crooked Island', 'East Grand Bahama', 'Exuma', 'Freeport', 'Fresh Creek', 'Governor\'s Harbour', 'Green Turtle Cay', 'Harbour Island', 'High Rock', 'Inagua', 'Kemps Bay', 'Long Island', 'Marsh Harbour', 'Mayaguana', 'Moore\'s Island', 'North Abaco', 'North Andros', 'North Eleuthera', 'Ragged Island', 'Rock Sound', 'San Salvador', 'South Abaco', 'South Andros', 'South Eleuthera', 'Spanish Wells', 'West Grand Bahama'];
                        break;
                    case 'Bahrain':
                        states = ['Capital Governorate', 'Central Governorate', 'Muharraq Governorate', 'Northern Governorate', 'Southern Governorate'];
                        break;
                    case 'Bangladesh':
                        states = ['Barisal', 'Chittagong', 'Dhaka', 'Khulna', 'Rajshahi', 'Rangpur', 'Sylhet'];
                        break;
                    case 'Barbados':
                        states = ['Christ Church', 'Saint Andrew', 'Saint George', 'Saint James', 'Saint John', 'Saint Joseph', 'Saint Lucy', 'Saint Michael', 'Saint Peter', 'Saint Philip', 'Saint Thomas'];
                        break;
                    case 'Belarus':
                        states = ['Brest Region', 'Gomel Region', 'Grodno Region', 'Minsk Region', 'Mogilev Region', 'Vitebsk Region'];
                        break;
                    case 'Belgium':
                        states = ['Antwerp', 'East Flanders', 'Flemish Brabant', 'Hainaut', 'Liège', 'Limburg', 'Luxembourg', 'Namur', 'Walloon Brabant', 'West Flanders'];
                        break;
                    case 'Belize':
                        states = ['Belize District', 'Cayo District', 'Corozal District', 'Orange Walk District', 'Stann Creek District', 'Toledo District'];
                        break;
                    case 'Benin':
                        states = ['Alibori', 'Atakora', 'Atlantique', 'Borgou', 'Collines', 'Donga', 'Kouffo', 'Littoral', 'Mono', 'Ouémé', 'Plateau', 'Zou'];
                        break;
                    case 'Bhutan':
                        states = ['Bumthang', 'Chhukha', 'Dagana', 'Gasa', 'Haa', 'Lhuntse', 'Mongar', 'Paro', 'Pemagatshel', 'Punakha', 'Samdrup Jongkhar', 'Samtse', 'Sarpang', 'Thimphu', 'Trashigang', 'Trashiyangtse', 'Trongsa', 'Tsirang', 'Wangdue Phodrang', 'Zhemgang'];
                        break;
                    case 'Bolivia':
                        states = ['Beni', 'Chuquisaca', 'Cochabamba', 'La Paz', 'Oruro', 'Pando', 'Potosi', 'Santa Cruz', 'Tarija'];
                        break;
                    case 'Bosnia and Herzegovina':
                        states = ['Federation of Bosnia and Herzegovina', 'Republika Srpska', 'Brčko District'];
                        break;
                    case 'Botswana':
                        states = ['Central', 'Ghanzi', 'Kgalagadi', 'Kgatleng', 'Kweneng', 'North-East', 'North-West', 'South-East', 'Southern'];
                        break;
                    case 'Brazil':
                        states = ['Acre', 'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará', 'Espírito Santo', 'Goiás', 'Maranhão', 'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 'Paraíba', 'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro', 'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima', 'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'];
                        break;
                    case 'Brunei':
                        states = ['Belait', 'Brunei-Muara', 'Temburong', 'Tutong'];
                        break;
                    case 'Bulgaria':
                        states = ['Blagoevgrad', 'Burgas', 'Dobrich', 'Gabrovo', 'Haskovo', 'Kardzhali', 'Kyustendil', 'Lovech', 'Montana', 'Pazardzhik', 'Pernik', 'Pleven', 'Plovdiv', 'Razgrad', 'Ruse', 'Shumen', 'Silistra', 'Sliven', 'Smolyan', 'Sofia City', 'Sofia Province', 'Stara Zagora', 'Targovishte', 'Varna', 'Veliko Tarnovo', 'Vidin', 'Vratsa', 'Yambol'];
                        break;
                    case 'Burkina Faso':
                        states = ['Boucle du Mouhoun', 'Cascades', 'Centre', 'Centre-Est', 'Centre-Nord', 'Centre-Ouest', 'Centre-Sud', 'Est', 'Hauts-Bassins', 'Nord', 'Plateau-Central', 'Sahel', 'Sud-Ouest'];
                        break;
                    case 'Burundi':
                        states = ['Bubanza', 'Bujumbura Mairie', 'Bujumbura Rural', 'Bururi', 'Cankuzo', 'Cibitoke', 'Gitega', 'Karuzi', 'Kayanza', 'Kirundo', 'Makamba', 'Muramvya', 'Muyinga', 'Mwaro', 'Ngozi', 'Rumonge', 'Rutana', 'Ruyigi'];
                        break;
                    case 'Cabo Verde':
                        states = ['Barlavento Islands', 'Sotavento Islands'];
                        break;
                    case 'Cambodia':
                        states = ['Banteay Meanchey', 'Battambang', 'Kampong Cham', 'Kampong Chhnang', 'Kampong Speu', 'Kampong Thom', 'Kampot', 'Kandal', 'Koh Kong', 'Kratie', 'Mondulkiri', 'Phnom Penh', 'Preah Vihear', 'Prey Veng', 'Pursat', 'Ratanakiri', 'Siem Reap', 'Stung Treng', 'Svay Rieng', 'Takeo', 'Oddar Meanchey', 'Kep', 'Pailin', 'Tboung Khmum'];
                        break;
                    case 'Cameroon':
                        states = ['Adamawa', 'Centre', 'East', 'Far North', 'Littoral', 'North', 'Northwest', 'South', 'Southwest', 'West'];
                        break;
                    case 'Canada':
                        states = ['Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland and Labrador', 'Nova Scotia', 'Ontario', 'Prince Edward Island', 'Quebec', 'Saskatchewan'];
                        break;
                    case 'Central African Republic':
                        states = ['Bamingui-Bangoran', 'Bangui', 'Basse-Kotto', 'Haute-Kotto', 'Haut-Mbomou', 'Kémo', 'Lobaye', 'Mambéré-Kadéï', 'Mbomou', 'Nana-Grébizi', 'Nana-Mambéré', 'Ombella-Mpoko', 'Ouaka', 'Ouham', 'Ouham-Pendé', 'Sangha-Mbaéré', 'Vakaga'];
                        break;
                    case 'Chad':
                        states = ['Bahr el Gazel', 'Batha', 'Borkou', 'Chari-Baguirmi', 'Ennedi-Est', 'Ennedi-Ouest', 'Guéra', 'Hadjer-Lamis', 'Kanem', 'Lac', 'Logone Occidental', 'Logone Oriental', 'Mandoul', 'Mayo-Kebbi Est', 'Mayo-Kebbi Ouest', 'Moyen-Chari', 'N\'Djamena', 'Ouaddaï', 'Salamat', 'Sila', 'Tandjilé', 'Tibesti', 'Wadi Fira'];
                        break;
                    case 'Chile':
                        states = ['Arica y Parinacota', 'Tarapacá', 'Antofagasta', 'Atacama', 'Coquimbo', 'Valparaíso', 'Región Metropolitana de Santiago', 'Libertador General Bernardo O\'Higgins', 'Maule', 'Ñuble', 'Biobío', 'Araucanía', 'Los Ríos', 'Los Lagos', 'Aysén del General Carlos Ibáñez del Campo', 'Magallanes y de la Antártica Chilena'];
                        break;
                    case 'Colombia':
                        states = ['Amazonas', 'Antioquia', 'Arauca', 'Atlántico', 'Bolívar', 'Boyacá', 'Caldas', 'Caquetá', 'Casanare', 'Cauca', 'Cesar', 'Chocó', 'Córdoba', 'Cundinamarca', 'Guainía', 'Guaviare', 'Huila', 'La Guajira', 'Magdalena', 'Meta', 'Nariño', 'Norte de Santander', 'Putumayo', 'Quindío', 'Risaralda', 'San Andrés y Providencia', 'Santander', 'Sucre', 'Tolima', 'Valle del Cauca', 'Vaupés', 'Vichada', 'Bogotá D.C.'];
                        break;
                    case 'United States':
                        states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
                        break;
                    case 'India':
                        states = ['Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal'];
                        break;
                    case 'China':
                        states = ['Anhui', 'Beijing', 'Chongqing', 'Fujian', 'Gansu', 'Guangdong', 'Guangxi', 'Guizhou', 'Hainan', 'Hebei', 'Heilongjiang', 'Henan', 'Hubei', 'Hunan', 'Inner Mongolia', 'Jiangsu', 'Jiangxi', 'Jilin', 'Liaoning', 'Ningxia', 'Qinghai', 'Shaanxi', 'Shandong', 'Shanghai', 'Shanxi', 'Sichuan', 'Tianjin', 'Tibet', 'Xinjiang', 'Yunnan', 'Zhejiang'];
                        break;
                    case 'Japan':
                        states = ['Aichi', 'Akita', 'Aomori', 'Chiba', 'Ehime', 'Fukui', 'Fukuoka', 'Fukushima', 'Gifu', 'Gunma', 'Hiroshima', 'Hokkaido', 'Hyogo', 'Ibaraki', 'Ishikawa', 'Iwate', 'Kagawa', 'Kagoshima', 'Kanagawa', 'Kochi', 'Kumamoto', 'Kyoto', 'Mie', 'Miyagi', 'Miyazaki', 'Nagano', 'Nagasaki', 'Nara', 'Niigata', 'Oita', 'Okayama', 'Okinawa', 'Osaka', 'Saga', 'Saitama', 'Shiga', 'Shimane', 'Shizuoka', 'Tochigi', 'Tokushima', 'Tokyo', 'Tottori', 'Toyama', 'Wakayama', 'Yamagata', 'Yamaguchi', 'Yamanashi'];
                        break;
                    case 'Germany':
                        states = ['Baden-Württemberg', 'Bavaria', 'Berlin', 'Brandenburg', 'Bremen', 'Hamburg', 'Hesse', 'Lower Saxony', 'Mecklenburg-Vorpommern', 'North Rhine-Westphalia', 'Rhineland-Palatinate', 'Saarland', 'Saxony', 'Saxony-Anhalt', 'Schleswig-Holstein', 'Thuringia'];
                        break;
                    case 'France':
                        states = ['Auvergne-Rhône-Alpes', 'Bourgogne-Franche-Comté', 'Brittany', 'Centre-Val de Loire', 'Corsica', 'Grand Est', 'Hauts-de-France', 'Île-de-France', 'Normandy', 'Nouvelle-Aquitaine', 'Occitanie', 'Pays de la Loire', 'Provence-Alpes-Côte d\'Azur'];
                        break;
                    case 'United Kingdom':
                        states = ['England', 'Northern Ireland', 'Scotland', 'Wales'];
                        break;
                    case 'Italy':
                        states = ['Abruzzo', 'Aosta Valley', 'Apulia', 'Basilicata', 'Calabria', 'Campania', 'Emilia-Romagna', 'Friuli-Venezia Giulia', 'Lazio', 'Liguria', 'Lombardy', 'Marche', 'Molise', 'Piedmont', 'Sardinia', 'Sicily', 'Trentino-South Tyrol', 'Tuscany', 'Umbria', 'Veneto'];
                        break;
                    case 'Russia':
                        states = ['Adygea', 'Altai Krai', 'Altai Republic', 'Amur', 'Arkhangelsk', 'Astrakhan', 'Bashkortostan', 'Belgorod', 'Bryansk', 'Buryatia', 'Chechnya', 'Chelyabinsk', 'Chukotka', 'Chuvashia', 'Dagestan', 'Ingushetia', 'Irkutsk', 'Ivanovo', 'Jewish Autonomous Oblast', 'Kabardino-Balkaria', 'Kaliningrad', 'Kalmykia', 'Kaluga', 'Kamchatka', 'Karachay-Cherkessia', 'Karelia', 'Kemerovo', 'Khabarovsk', 'Khakassia', 'Khanty-Mansi', 'Kirov', 'Komi', 'Kostroma', 'Krasnodar', 'Krasnoyarsk', 'Kurgan', 'Kursk', 'Leningrad', 'Lipetsk', 'Magadan', 'Mari El', 'Mordovia', 'Moscow', 'Moscow Oblast', 'Murmansk', 'Nenets', 'Nizhny Novgorod', 'Novgorod', 'Novosibirsk', 'Omsk', 'Orenburg', 'Oryol', 'Penza', 'Perm', 'Primorsky', 'Pskov', 'Rostov', 'Ryazan', 'Sakha', 'Sakhalin', 'Samara', 'Saratov', 'Smolensk', 'Stavropol', 'Sverdlovsk', 'Tambov', 'Tatarstan', 'Tomsk', 'Tula', 'Tuva', 'Tver', 'Tyumen', 'Udmurtia', 'Ulyanovsk', 'Vladimir', 'Volgograd', 'Vologda', 'Voronezh', 'Yamal-Nenets', 'Yaroslavl', 'Zabaykalsky'];
                        break;
                    case 'Mexico':
                        states = ['Aguascalientes', 'Baja California', 'Baja California Sur', 'Campeche', 'Chiapas', 'Chihuahua', 'Coahuila', 'Colima', 'Durango', 'Guanajuato', 'Guerrero', 'Hidalgo', 'Jalisco', 'Mexico City', 'Mexico State', 'Michoacán', 'Morelos', 'Nayarit', 'Nuevo León', 'Oaxaca', 'Puebla', 'Querétaro', 'Quintana Roo', 'San Luis Potosí', 'Sinaloa', 'Sonora', 'Tabasco', 'Tamaulipas', 'Tlaxcala', 'Veracruz', 'Yucatán', 'Zacatecas'];
                        break;
                    case 'Comoros':
                        states = ['Anjouan', 'Grande Comore', 'Mohéli'];
                        break;
                    case 'Congo, Democratic Republic of the':
                        states = ['Bas-Uele', 'Équateur', 'Haut-Katanga', 'Haut-Lomami', 'Haut-Uele', 'Ituri', 'Kasaï', 'Kasaï-Central', 'Kasaï-Oriental', 'Kinshasa', 'Kongo Central', 'Kwango', 'Kwilu', 'Lomami', 'Lualaba', 'Mai-Ndombe', 'Maniema', 'Mongala', 'Nord-Kivu', 'Nord-Ubangi', 'Sankuru', 'Sud-Kivu', 'Sud-Ubangi', 'Tanganyika', 'Tshopo', 'Tshuapa'];
                        break;
                    case 'Congo, Republic of the':
                        states = ['Bouenza', 'Cuvette', 'Cuvette-Ouest', 'Kouilou', 'Lékoumou', 'Likouala', 'Niari', 'Plateaux', 'Pool', 'Sangha', 'Brazzaville', 'Pointe-Noire'];
                        break;
                    case 'Costa Rica':
                        states = ['Alajuela', 'Cartago', 'Guanacaste', 'Heredia', 'Limón', 'Puntarenas', 'San José'];
                        break;
                    case 'Croatia':
                        states = ['Bjelovar-Bilogora', 'Brodsko-posavska', 'Dubrovnik-Neretva', 'Istria', 'Karlovac', 'Koprivnica-Križevci', 'Krapina-Zagorje', 'Lika-Senj', 'Međimurje', 'Osijek-Baranja', 'Požega-Slavonia', 'Primorje-Gorski Kotar', 'Šibenik-Knin', 'Sisak-Moslavina', 'Split-Dalmatia', 'Varaždin', 'Virovitica-Podravina', 'Vukovar-Syrmia', 'Zadar', 'Zagreb County', 'Zagreb'];
                        break;
                    case 'Cuba':
                        states = ['Artemisa', 'Camagüey', 'Ciego de Ávila', 'Cienfuegos', 'Granma', 'Guantánamo', 'Havana', 'Holguín', 'Isle of Youth', 'Las Tunas', 'Matanzas', 'Mayabeque', 'Pinar del Río', 'Sancti Spíritus', 'Santiago de Cuba', 'Villa Clara'];
                        break;
                    case 'Cyprus':
                        states = ['Famagusta', 'Kyrenia', 'Larnaca', 'Limassol', 'Nicosia', 'Paphos'];
                        break;
                    case 'Czech Republic':
                        states = ['Central Bohemia', 'Hradec Králové', 'Karlovy Vary', 'Liberec', 'Moravian-Silesian', 'Olomouc', 'Pardubice', 'Plzeň', 'Prague', 'South Bohemia', 'South Moravia', 'Ústí nad Labem', 'Vysočina', 'Zlín'];
                        break;
                    case 'Denmark':
                        states = ['Capital Region', 'Central Denmark', 'North Denmark', 'Region Zealand', 'Southern Denmark'];
                        break;
                    case 'Djibouti':
                        states = ['Ali Sabieh', 'Arta', 'Dikhil', 'Djibouti', 'Obock', 'Tadjourah'];
                        break;
                    case 'Dominica':
                        states = ['Saint Andrew', 'Saint David', 'Saint George', 'Saint John', 'Saint Joseph', 'Saint Luke', 'Saint Mark', 'Saint Patrick', 'Saint Paul', 'Saint Peter'];
                        break;
                    case 'Dominican Republic':
                        states = ['Azua', 'Baoruco', 'Barahona', 'Dajabón', 'Distrito Nacional', 'Duarte', 'El Seibo', 'Elías Piña', 'Espaillat', 'Hato Mayor', 'Hermanas Mirabal', 'Independencia', 'La Altagracia', 'La Romana', 'La Vega', 'María Trinidad Sánchez', 'Monseñor Nouel', 'Monte Cristi', 'Monte Plata', 'Pedernales', 'Peravia', 'Puerto Plata', 'Samaná', 'San Cristóbal', 'San José de Ocoa', 'San Juan', 'San Pedro de Macorís', 'Sánchez Ramírez', 'Santiago', 'Santiago Rodríguez', 'Santo Domingo', 'Valverde'];
                        break;
                    case 'East Timor':
                        states = ['Aileu', 'Ainaro', 'Baucau', 'Bobonaro', 'Cova Lima', 'Díli', 'Ermera', 'Lautém', 'Liquiçá', 'Manatuto', 'Manufahi', 'Oecusse', 'Viqueque'];
                        break;
                    case 'Ecuador':
                        states = ['Azuay', 'Bolívar', 'Cañar', 'Carchi', 'Chimborazo', 'Cotopaxi', 'El Oro', 'Esmeraldas', 'Galápagos', 'Guayas', 'Imbabura', 'Loja', 'Los Ríos', 'Manabí', 'Morona-Santiago', 'Napo', 'Orellana', 'Pastaza', 'Pichincha', 'Santa Elena', 'Santo Domingo de los Tsáchilas', 'Sucumbíos', 'Tungurahua', 'Zamora-Chinchipe'];
                        break;
                    case 'Egypt':
                        states = ['Alexandria', 'Aswan', 'Asyut', 'Beheira', 'Beni Suef', 'Cairo', 'Dakahlia', 'Damietta', 'Faiyum', 'Gharbia', 'Giza', 'Ismailia', 'Kafr el-Sheikh', 'Luxor', 'Matruh', 'Minya', 'Monufia', 'New Valley', 'North Sinai', 'Port Said', 'Qalyubia', 'Qena', 'Red Sea', 'Sharqia', 'Sohag', 'South Sinai', 'Suez'];
                        break;
                    case 'El Salvador':
                        states = ['Ahuachapán', 'Cabañas', 'Chalatenango', 'Cuscatlán', 'La Libertad', 'La Paz', 'La Unión', 'Morazán', 'San Miguel', 'San Salvador', 'San Vicente', 'Santa Ana', 'Sonsonate', 'Usulután'];
                        break;
                    case 'Equatorial Guinea':
                        states = ['Annobón', 'Bioko Norte', 'Bioko Sur', 'Centro Sur', 'Kié-Ntem', 'Litoral', 'Wele-Nzas'];
                        break;
                    case 'Eritrea':
                        states = ['Anseba', 'Debub', 'Debubawi Keyih Bahri', 'Gash-Barka', 'Maekel', 'Semenawi Keyih Bahri'];
                        break;
                    case 'Estonia':
                        states = ['Harju', 'Hiiu', 'Ida-Viru', 'Jõgeva', 'Järva', 'Lääne', 'Lääne-Viru', 'Põlva', 'Pärnu', 'Rapla', 'Saare', 'Tartu', 'Valga', 'Viljandi', 'Võru'];
                        break;
                    case 'Eswatini':
                        states = ['Hhohho', 'Lubombo', 'Manzini', 'Shiselweni'];
                        break;
                    case 'Ethiopia':
                        states = ['Addis Ababa', 'Afar', 'Amhara', 'Benishangul-Gumuz', 'Dire Dawa', 'Gambela', 'Harari', 'Oromia', 'Sidama', 'Somali', 'Southern Nations', 'Tigray'];
                        break;
                    case 'Fiji':
                        states = ['Ba', 'Bua', 'Cakaudrove', 'Kadavu', 'Lau', 'Lomaiviti', 'Macuata', 'Nadroga-Navosa', 'Naitasiri', 'Namosi', 'Ra', 'Rewa', 'Serua', 'Tailevu'];
                        break;
                    case 'Finland':
                        states = ['Åland', 'Central Finland', 'Central Ostrobothnia', 'Finland Proper', 'Kainuu', 'Kanta-Häme', 'Kymenlaakso', 'Lapland', 'North Karelia', 'Northern Ostrobothnia', 'Northern Savonia', 'Ostrobothnia', 'Päijät-Häme', 'Pirkanmaa', 'Satakunta', 'South Karelia', 'Southern Ostrobothnia', 'Southern Savonia', 'Uusimaa'];
                        break;
                    case 'Gabon':
                        states = ['Estuaire', 'Haut-Ogooué', 'Moyen-Ogooué', 'Ngounié', 'Nyanga', 'Ogooué-Ivindo', 'Ogooué-Lolo', 'Ogooué-Maritime', 'Woleu-Ntem'];
                        break;
                    case 'Gambia':
                        states = ['Banjul', 'Central River', 'Lower River', 'North Bank', 'Upper River', 'West Coast'];
                        break;
                    case 'Georgia':
                        states = ['Adjara', 'Guria', 'Imereti', 'Kakheti', 'Kvemo Kartli', 'Mtskheta-Mtianeti', 'Racha-Lechkhumi', 'Samegrelo-Zemo Svaneti', 'Samtskhe-Javakheti', 'Shida Kartli', 'Tbilisi'];
                        break;
                    case 'Ghana':
                        states = ['Ahafo', 'Ashanti', 'Bono', 'Bono East', 'Central', 'Eastern', 'Greater Accra', 'North East', 'Northern', 'Oti', 'Savannah', 'Upper East', 'Upper West', 'Volta', 'Western', 'Western North'];
                        break;
                    case 'Greece':
                        states = ['Attica', 'Central Greece', 'Central Macedonia', 'Crete', 'East Macedonia and Thrace', 'Epirus', 'Ionian Islands', 'North Aegean', 'Peloponnese', 'South Aegean', 'Thessaly', 'West Greece', 'West Macedonia'];
                        break;
                    case 'Grenada':
                        states = ['Carriacou and Petite Martinique', 'Saint Andrew', 'Saint David', 'Saint George', 'Saint John', 'Saint Mark', 'Saint Patrick'];
                        break;
                    case 'Guatemala':
                        states = ['Alta Verapaz', 'Baja Verapaz', 'Chimaltenango', 'Chiquimula', 'El Progreso', 'Escuintla', 'Guatemala', 'Huehuetenango', 'Izabal', 'Jalapa', 'Jutiapa', 'Petén', 'Quetzaltenango', 'Quiché', 'Retalhuleu', 'Sacatepéquez', 'San Marcos', 'Santa Rosa', 'Sololá', 'Suchitepéquez', 'Totonicapán', 'Zacapa'];
                        break;
                    case 'Guinea':
                        states = ['Boké', 'Conakry', 'Faranah', 'Kankan', 'Kindia', 'Labé', 'Mamou', 'Nzérékoré'];
                        break;
                    case 'Guinea-Bissau':
                        states = ['Bafatá', 'Biombo', 'Bissau', 'Bolama', 'Cacheu', 'Gabú', 'Oio', 'Quinara', 'Tombali'];
                        break;
                    case 'Guyana':
                        states = ['Barima-Waini', 'Cuyuni-Mazaruni', 'Demerara-Mahaica', 'East Berbice-Corentyne', 'Essequibo Islands-West Demerara', 'Mahaica-Berbice', 'Pomeroon-Supenaam', 'Potaro-Siparuni', 'Upper Demerara-Berbice', 'Upper Takutu-Upper Essequibo'];
                        break;
                    case 'Haiti':
                        states = ['Artibonite', 'Centre', 'Grand\'Anse', 'Nippes', 'Nord', 'Nord-Est', 'Nord-Ouest', 'Ouest', 'Sud', 'Sud-Est'];
                        break;
                    case 'Honduras':
                        states = ['Atlántida', 'Choluteca', 'Colón', 'Comayagua', 'Copán', 'Cortés', 'El Paraíso', 'Francisco Morazán', 'Gracias a Dios', 'Intibucá', 'Islas de la Bahía', 'La Paz', 'Lempira', 'Ocotepeque', 'Olancho', 'Santa Bárbara', 'Valle', 'Yoro'];
                        break;
                    case 'Hungary':
                        states = ['Bács-Kiskun', 'Baranya', 'Békés', 'Borsod-Abaúj-Zemplén', 'Budapest', 'Csongrád-Csanád', 'Fejér', 'Győr-Moson-Sopron', 'Hajdú-Bihar', 'Heves', 'Jász-Nagykun-Szolnok', 'Komárom-Esztergom', 'Nógrád', 'Pest', 'Somogy', 'Szabolcs-Szatmár-Bereg', 'Tolna', 'Vas', 'Veszprém', 'Zala'];
                        break;
                    case 'Iceland':
                        states = ['Capital Region', 'Eastern Region', 'Northeastern Region', 'Northwestern Region', 'Southern Peninsula', 'Southern Region', 'Western Region', 'Westfjords'];
                        break;
                    case 'Indonesia':
                        states = ['Aceh', 'Bali', 'Bangka Belitung', 'Banten', 'Bengkulu', 'Central Java', 'Central Kalimantan', 'Central Sulawesi', 'East Java', 'East Kalimantan', 'East Nusa Tenggara', 'Gorontalo', 'Jakarta', 'Jambi', 'Lampung', 'Maluku', 'North Kalimantan', 'North Maluku', 'North Sulawesi', 'North Sumatra', 'Papua', 'Riau', 'Riau Islands', 'South Kalimantan', 'South Sulawesi', 'South Sumatra', 'Southeast Sulawesi', 'West Java', 'West Kalimantan', 'West Nusa Tenggara', 'West Papua', 'West Sulawesi', 'West Sumatra', 'Yogyakarta'];
                        break;
                    case 'Iran':
                        states = ['Alborz', 'Ardabil', 'Bushehr', 'Chaharmahal and Bakhtiari', 'East Azerbaijan', 'Fars', 'Gilan', 'Golestan', 'Hamadan', 'Hormozgan', 'Ilam', 'Isfahan', 'Kerman', 'Kermanshah', 'Khuzestan', 'Kohgiluyeh and Boyer-Ahmad', 'Kurdistan', 'Lorestan', 'Markazi', 'Mazandaran', 'North Khorasan', 'Qazvin', 'Qom', 'Razavi Khorasan', 'Semnan', 'Sistan and Baluchestan', 'South Khorasan', 'Tehran', 'West Azerbaijan', 'Yazd', 'Zanjan'];
                        break;
                    case 'Iraq':
                        states = ['Al Anbar', 'Al Muthanna', 'Al Qādisiyyah', 'As Sulaymaniyyah', 'Babil', 'Baghdad', 'Basra', 'Dhi Qar', 'Diyala', 'Dohuk', 'Erbil', 'Halabja', 'Karbala', 'Kirkuk', 'Maysan', 'Najaf', 'Ninawa', 'Salah ad Din', 'Wasit'];
                        break;
                    case 'Ireland':
                        states = ['Carlow', 'Cavan', 'Clare', 'Cork', 'Donegal', 'Dublin', 'Galway', 'Kerry', 'Kildare', 'Kilkenny', 'Laois', 'Leitrim', 'Limerick', 'Longford', 'Louth', 'Mayo', 'Meath', 'Monaghan', 'Offaly', 'Roscommon', 'Sligo', 'Tipperary', 'Waterford', 'Westmeath', 'Wexford', 'Wicklow'];
                        break;
                    case 'Israel':
                        states = ['Central District', 'Haifa District', 'Jerusalem District', 'Northern District', 'Southern District', 'Tel Aviv District'];
                        break;
                    case 'Jamaica':
                        states = ['Clarendon', 'Hanover', 'Kingston', 'Manchester', 'Portland', 'Saint Andrew', 'Saint Ann', 'Saint Catherine', 'Saint Elizabeth', 'Saint James', 'Saint Mary', 'Saint Thomas', 'Trelawny', 'Westmoreland'];
                        break;
                    case 'Jordan':
                        states = ['Ajloun', 'Amman', 'Aqaba', 'Balqa', 'Irbid', 'Jerash', 'Karak', 'Ma\'an', 'Madaba', 'Mafraq', 'Tafilah', 'Zarqa'];
                        break;
                    case 'Kazakhstan':
                        states = ['Akmola', 'Aktobe', 'Almaty', 'Atyrau', 'East Kazakhstan', 'Jambyl', 'Karagandy', 'Kostanay', 'Kyzylorda', 'Mangystau', 'North Kazakhstan', 'Pavlodar', 'Shymkent', 'Turkistan', 'West Kazakhstan'];
                        break;
                    case 'Kenya':
                        states = ['Baringo', 'Bomet', 'Bungoma', 'Busia', 'Elgeyo-Marakwet', 'Embu', 'Garissa', 'Homa Bay', 'Isiolo', 'Kajiado', 'Kakamega', 'Kericho', 'Kiambu', 'Kilifi', 'Kirinyaga', 'Kisii', 'Kisumu', 'Kitui', 'Kwale', 'Laikipia', 'Lamu', 'Machakos', 'Makueni', 'Mandera', 'Marsabit', 'Meru', 'Migori', 'Mombasa', 'Murang\'a', 'Nairobi', 'Nakuru', 'Nandi', 'Narok', 'Nyamira', 'Nyandarua', 'Nyeri', 'Samburu', 'Siaya', 'Taita-Taveta', 'Tana River', 'Tharaka-Nithi', 'Trans Nzoia', 'Turkana', 'Uasin Gishu', 'Vihiga', 'Wajir', 'West Pokot'];
                        break;
                    case 'Kiribati':
                        states = ['Gilbert Islands', 'Line Islands', 'Phoenix Islands'];
                        break;
                    case 'Korea, North':
                        states = ['Chagang', 'Hamgyong-bukto', 'Hamgyong-namdo', 'Hwanghae-bukto', 'Hwanghae-namdo', 'Kangwon', 'Pyongan-bukto', 'Pyongan-namdo', 'Pyongyang', 'Ryanggang'];
                        break;
                    case 'Korea, South':
                        states = ['Busan', 'Chungcheongbuk-do', 'Chungcheongnam-do', 'Daegu', 'Daejeon', 'Gangwon', 'Gwangju', 'Gyeonggi', 'Gyeongsangbuk-do', 'Gyeongsangnam-do', 'Incheon', 'Jeju', 'Jeollabuk-do', 'Jeollanam-do', 'Sejong', 'Seoul', 'Ulsan'];
                        break;
                    case 'Kosovo':
                        states = ['Ferizaj', 'Gjakova', 'Gjilan', 'Mitrovica', 'Peja', 'Pristina', 'Prizren'];
                        break;
                    case 'Kuwait':
                        states = ['Al Ahmadi', 'Al Asimah', 'Al Farwaniyah', 'Al Jahra', 'Hawalli', 'Mubarak Al-Kabeer'];
                        break;
                    case 'Kyrgyzstan':
                        states = ['Batken', 'Bishkek', 'Chuy', 'Issyk-Kul', 'Jalal-Abad', 'Naryn', 'Osh', 'Talas'];
                        break;
                    case 'Laos':
                        states = ['Attapeu', 'Bokeo', 'Bolikhamxai', 'Champasak', 'Houaphanh', 'Khammouane', 'Luang Namtha', 'Luang Prabang', 'Oudomxai', 'Phongsali', 'Saravane', 'Savannakhet', 'Sekong', 'Vientiane', 'Vientiane Prefecture', 'Xaignabouli', 'Xaisomboun', 'Xiangkhouang'];
                        break;
                    case 'Latvia':
                        states = ['Aizkraukle', 'Aluksne', 'Balvi', 'Bauska', 'Cesis', 'Daugavpils', 'Dobele', 'Gulbene', 'Jekabpils', 'Jelgava', 'Kraslava', 'Kuldiga', 'Liepaja', 'Limbazi', 'Ludza', 'Madona', 'Ogre', 'Preili', 'Rezekne', 'Riga', 'Saldus', 'Talsi', 'Tukums', 'Valka', 'Valmiera', 'Ventspils'];
                        break;
                    case 'Lebanon':
                        states = ['Akkar', 'Baalbek-Hermel', 'Beirut', 'Beqaa', 'Mount Lebanon', 'Nabatieh', 'North', 'South'];
                        break;
                    case 'Lesotho':
                        states = ['Berea', 'Butha-Buthe', 'Leribe', 'Mafeteng', 'Maseru', 'Mohale\'s Hoek', 'Mokhotlong', 'Qacha\'s Nek', 'Quthing', 'Thaba-Tseka'];
                        break;
                    case 'Liberia':
                        states = ['Bomi', 'Bong', 'Gbarpolu', 'Grand Bassa', 'Grand Cape Mount', 'Grand Gedeh', 'Grand Kru', 'Lofa', 'Margibi', 'Maryland', 'Montserrado', 'Nimba', 'River Cess', 'River Gee', 'Sinoe'];
                        break;
                    case 'Libya':
                        states = ['Al Butnan', 'Al Jabal al Akhdar', 'Al Jabal al Gharbi', 'Al Jifarah', 'Al Kufrah', 'Al Marj', 'Al Marqab', 'Al Wahat', 'An Nuqat al Khams', 'Az Zawiyah', 'Benghazi', 'Darnah', 'Ghat', 'Misratah', 'Murzuq', 'Nalut', 'Sabha', 'Surt', 'Tripoli', 'Wadi al Hayah', 'Wadi ash Shati'];
                        break;
                    case 'Liechtenstein':
                        states = ['Balzers', 'Eschen', 'Gamprin', 'Mauren', 'Planken', 'Ruggell', 'Schaan', 'Schellenberg', 'Triesen', 'Triesenberg', 'Vaduz'];
                        break;
                    case 'Lithuania':
                        states = ['Alytus', 'Kaunas', 'Klaipeda', 'Marijampole', 'Panevezys', 'Siauliai', 'Taurage', 'Telsiai', 'Utena', 'Vilnius'];
                        break;
                    case 'Luxembourg':
                        states = ['Diekirch', 'Grevenmacher', 'Luxembourg'];
                        break;
                    case 'Madagascar':
                        states = ['Antananarivo', 'Antsiranana', 'Fianarantsoa', 'Mahajanga', 'Toamasina', 'Toliara'];
                        break;
                    case 'Malawi':
                        states = ['Central Region', 'Northern Region', 'Southern Region'];
                        break;
                    case 'Malaysia':
                        states = ['Johor', 'Kedah', 'Kelantan', 'Kuala Lumpur', 'Labuan', 'Malacca', 'Negeri Sembilan', 'Pahang', 'Penang', 'Perak', 'Perlis', 'Putrajaya', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu'];
                        break;
                    case 'Maldives':
                        states = ['Addu', 'Alif Alif', 'Alif Dhaal', 'Baa', 'Dhaalu', 'Faafu', 'Gaafu Alif', 'Gaafu Dhaalu', 'Gnaviyani', 'Haa Alif', 'Haa Dhaalu', 'Kaafu', 'Laamu', 'Lhaviyani', 'Meemu', 'Noonu', 'Raa', 'Seenu', 'Shaviyani', 'Thaa', 'Vaavu'];
                        break;
                    case 'Mali':
                        states = ['Bamako', 'Gao', 'Kayes', 'Kidal', 'Koulikoro', 'Menaka', 'Mopti', 'Segou', 'Sikasso', 'Taoudenit', 'Tombouctou'];
                        break;
                    case 'Malta':
                        states = ['Gozo', 'Malta'];
                        break;
                    case 'Marshall Islands':
                        states = ['Ailinglaplap', 'Ailuk', 'Arno', 'Aur', 'Bikini', 'Ebon', 'Enewetak', 'Jabat', 'Jaluit', 'Kili', 'Kwajalein', 'Lae', 'Lib', 'Likiep', 'Majuro', 'Maloelap', 'Mejit', 'Mili', 'Namdrik', 'Namu', 'Rongelap', 'Rongerik', 'Toke', 'Ujae', 'Ujelang', 'Utirik', 'Wotho', 'Wotje'];
                        break;
                    case 'Mauritania':
                        states = ['Adrar', 'Assaba', 'Brakna', 'Dakhlet Nouadhibou', 'Gorgol', 'Guidimaka', 'Hodh Ech Chargui', 'Hodh El Gharbi', 'Inchiri', 'Nouakchott-Nord', 'Nouakchott-Ouest', 'Nouakchott-Sud', 'Tagant', 'Tiris Zemmour', 'Trarza'];
                        break;
                    case 'Mauritius':
                        states = ['Black River', 'Flacq', 'Grand Port', 'Moka', 'Pamplemousses', 'Plaines Wilhems', 'Port Louis', 'Riviere du Rempart', 'Rodrigues', 'Savanne'];
                        break;
                    case 'Micronesia':
                        states = ['Chuuk', 'Kosrae', 'Pohnpei', 'Yap'];
                        break;
                    case 'Moldova':
                        states = ['Anenii Noi', 'Balti', 'Basarabeasca', 'Bender', 'Briceni', 'Cahul', 'Calarasi', 'Cantemir', 'Causeni', 'Chisinau', 'Cimislia', 'Criuleni', 'Donduseni', 'Drochia', 'Dubasari', 'Edinet', 'Falesti', 'Floresti', 'Gagauzia', 'Glodeni', 'Hincesti', 'Ialoveni', 'Leova', 'Nisporeni', 'Ocnita', 'Orhei', 'Rezina', 'Riscani', 'Singerei', 'Soldanesti', 'Soroca', 'Stefan Voda', 'Straseni', 'Taraclia', 'Telenesti', 'Transnistria', 'Ungheni'];
                        break;
                    case 'Monaco':
                        states = ['Fontvieille', 'La Condamine', 'Monaco-Ville', 'Monte Carlo'];
                        break;
                    case 'Mongolia':
                        states = ['Arkhangai', 'Bayan-Olgii', 'Bayankhongor', 'Bulgan', 'Darkhan-Uul', 'Dornod', 'Dornogovi', 'Dundgovi', 'Govi-Altai', 'Govisumber', 'Khentii', 'Khovd', 'Khuvsgul', 'Orkhon', 'Ovorkhangai', 'Selenge', 'Sukhbaatar', 'Tov', 'Ulaanbaatar', 'Uvs', 'Zavkhan'];
                        break;
                    case 'Montenegro':
                        states = ['Andrijevica', 'Bar', 'Berane', 'Bijelo Polje', 'Budva', 'Cetinje', 'Danilovgrad', 'Gusinje', 'Herceg Novi', 'Kolasin', 'Kotor', 'Mojkovac', 'Niksic', 'Petnjica', 'Plav', 'Pljevlja', 'Pluzine', 'Podgorica', 'Rozaje', 'Savnik', 'Tivat', 'Tuzi', 'Ulcinj', 'Zabljak'];
                        break;
                    case 'Morocco':
                        states = ['Beni Mellal-Khenifra', 'Casablanca-Settat', 'Draa-Tafilalet', 'Fes-Meknes', 'Guelmim-Oued Noun', 'Laayoune-Sakia El Hamra', 'Marrakech-Safi', 'Oriental', 'Rabat-Sale-Kenitra', 'Souss-Massa', 'Tangier-Tetouan-Al Hoceima', 'Dakhla-Oued Ed-Dahab'];
                        break;
                    case 'Mozambique':
                        states = ['Cabo Delgado', 'Gaza', 'Inhambane', 'Manica', 'Maputo', 'Maputo City', 'Nampula', 'Niassa', 'Sofala', 'Tete', 'Zambezia'];
                        break;
                    case 'Myanmar':
                        states = ['Ayeyarwady', 'Bago', 'Chin', 'Kachin', 'Kayah', 'Kayin', 'Magway', 'Mandalay', 'Mon', 'Naypyidaw', 'Rakhine', 'Sagaing', 'Shan', 'Tanintharyi', 'Yangon'];
                        break;
                    case 'Namibia':
                        states = ['Erongo', 'Hardap', 'Karas', 'Kavango East', 'Kavango West', 'Khomas', 'Kunene', 'Ohangwena', 'Omaheke', 'Omusati', 'Oshana', 'Oshikoto', 'Otjozondjupa', 'Zambezi'];
                        break;
                    case 'Nauru':
                        states = ['Aiwo', 'Anabar', 'Anetan', 'Anibare', 'Baiti', 'Boe', 'Buada', 'Denigomodu', 'Ewa', 'Ijuw', 'Meneng', 'Nibok', 'Uaboe', 'Yaren'];
                        break;
                    case 'Nepal':
                        states = ['Bagmati', 'Gandaki', 'Karnali', 'Lumbini', 'Province No. 1', 'Province No. 2', 'Sudurpashchim'];
                        break;
                    case 'Netherlands':
                        states = ['Drenthe', 'Flevoland', 'Friesland', 'Gelderland', 'Groningen', 'Limburg', 'North Brabant', 'North Holland', 'Overijssel', 'South Holland', 'Utrecht', 'Zeeland'];
                        break;
                    case 'New Zealand':
                        states = ['Auckland', 'Bay of Plenty', 'Canterbury', 'Gisborne', 'Hawke\'s Bay', 'Manawatu-Whanganui', 'Marlborough', 'Nelson', 'Northland', 'Otago', 'Southland', 'Taranaki', 'Tasman', 'Waikato', 'Wellington', 'West Coast'];
                        break;
                    case 'Nicaragua':
                        states = ['Boaco', 'Carazo', 'Chinandega', 'Chontales', 'Esteli', 'Granada', 'Jinotega', 'Leon', 'Madriz', 'Managua', 'Masaya', 'Matagalpa', 'North Caribbean Coast', 'Nueva Segovia', 'Rio San Juan', 'Rivas', 'South Caribbean Coast'];
                        break;
                    case 'Niger':
                        states = ['Agadez', 'Diffa', 'Dosso', 'Maradi', 'Niamey', 'Tahoua', 'Tillaberi', 'Zinder'];
                        break;
                    case 'Nigeria':
                        states = ['Abia', 'Adamawa', 'Akwa Ibom', 'Anambra', 'Bauchi', 'Bayelsa', 'Benue', 'Borno', 'Cross River', 'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Federal Capital Territory', 'Gombe', 'Imo', 'Jigawa', 'Kaduna', 'Kano', 'Katsina', 'Kebbi', 'Kogi', 'Kwara', 'Lagos', 'Nasarawa', 'Niger', 'Ogun', 'Ondo', 'Osun', 'Oyo', 'Plateau', 'Rivers', 'Sokoto', 'Taraba', 'Yobe', 'Zamfara'];
                        break;
                    case 'North Macedonia':
                        states = ['Aracinovo', 'Berovo', 'Bitola', 'Bogdanci', 'Bogovinje', 'Bosilovo', 'Brvenica', 'Butel', 'Centar', 'Centar Zupa', 'Cheshinovo-Obleshevo', 'Cucer Sandevo', 'Debar', 'Debarca', 'Delcevo', 'Demir Hisar', 'Demir Kapija', 'Dojran', 'Dolneni', 'Drugovo', 'Gazi Baba', 'Gevgelija', 'Gostivar', 'Gradsko', 'Ilinden', 'Jegunovce', 'Karbinci', 'Karpos', 'Kavadarci', 'Kicevo', 'Kisela Voda', 'Kocani', 'Konce', 'Kratovo', 'Kriva Palanka', 'Krivogastani', 'Krusevo', 'Kumanovo', 'Lipkovo', 'Lozovo', 'Makedonska Kamenica', 'Makedonski Brod', 'Mavrovo and Rostusa', 'Mogila', 'Negotino', 'Novaci', 'Novo Selo', 'Ohrid', 'Oslomej', 'Pehcevo', 'Petrovec', 'Plasnica', 'Prilep', 'Probistip', 'Radovis', 'Rankovce', 'Resen', 'Rosoman', 'Saraj', 'Sopiste', 'Staro Nagoricane', 'Stip', 'Struga', 'Strumica', 'Studenichani', 'Suto Orizari', 'Sveti Nikole', 'Tearce', 'Tetovo', 'Valandovo', 'Vasilevo', 'Veles', 'Vevcani', 'Vinica', 'Vranestica', 'Vrapciste', 'Zelenikovo', 'Zelino', 'Zrnovci'];
                        break;
                    case 'Norway':
                        states = ['Agder', 'Innlandet', 'More og Romsdal', 'Nordland', 'Oslo', 'Rogaland', 'Troms og Finnmark', 'Trondelag', 'Vestfold og Telemark', 'Vestland', 'Viken'];
                        break;
                    case 'Oman':
                        states = ['Ad Dakhiliyah', 'Ad Dhahirah', 'Al Batinah North', 'Al Batinah South', 'Al Buraimi', 'Al Wusta', 'Ash Sharqiyah North', 'Ash Sharqiyah South', 'Dhofar', 'Musandam', 'Muscat'];
                        break;
                    case 'Pakistan':
                        states = ['Azad Kashmir', 'Balochistan', 'Gilgit-Baltistan', 'Islamabad', 'Khyber Pakhtunkhwa', 'Punjab', 'Sindh'];
                        break;
                    case 'Palau':
                        states = ['Aimeliik', 'Airai', 'Angaur', 'Hatohobei', 'Kayangel', 'Koror', 'Melekeok', 'Ngaraard', 'Ngarchelong', 'Ngardmau', 'Ngatpang', 'Ngchesar', 'Ngeremlengui', 'Ngiwal', 'Peleliu', 'Sonsorol'];
                        break;
                    case 'Panama':
                        states = ['Bocas del Toro', 'Chiriqui', 'Cocle', 'Colon', 'Darien', 'Herrera', 'Los Santos', 'Panama', 'Panama Oeste', 'Veraguas'];
                        break;
                    case 'Papua New Guinea':
                        states = ['Bougainville', 'Central', 'Chimbu', 'Eastern Highlands', 'East New Britain', 'East Sepik', 'Enga', 'Gulf', 'Hela', 'Jiwaka', 'Madang', 'Manus', 'Milne Bay', 'Morobe', 'National Capital District', 'New Ireland', 'Northern', 'Southern Highlands', 'Western', 'Western Highlands', 'West New Britain', 'West Sepik'];
                        break;
                    case 'Paraguay':
                        states = ['Alto Paraguay', 'Alto Parana', 'Amambay', 'Asuncion', 'Boqueron', 'Caaguazu', 'Caazapa', 'Canindeyu', 'Central', 'Concepcion', 'Cordillera', 'Guaira', 'Itapua', 'Misiones', 'Neembucu', 'Paraguari', 'Presidente Hayes', 'San Pedro'];
                        break;
                    case 'Peru':
                        states = ['Amazonas', 'Ancash', 'Apurimac', 'Arequipa', 'Ayacucho', 'Cajamarca', 'Callao', 'Cusco', 'Huancavelica', 'Huanuco', 'Ica', 'Junin', 'La Libertad', 'Lambayeque', 'Lima', 'Loreto', 'Madre de Dios', 'Moquegua', 'Pasco', 'Piura', 'Puno', 'San Martin', 'Tacna', 'Tumbes', 'Ucayali'];
                        break;
                    case 'Philippines':
                        states = ['Abra', 'Agusan del Norte', 'Agusan del Sur', 'Aklan', 'Albay', 'Antique', 'Apayao', 'Aurora', 'Basilan', 'Bataan', 'Batanes', 'Batangas', 'Benguet', 'Biliran', 'Bohol', 'Bukidnon', 'Bulacan', 'Cagayan', 'Camarines Norte', 'Camarines Sur', 'Camiguin', 'Capiz', 'Catanduanes', 'Cavite', 'Cebu', 'Cotabato', 'Davao del Norte', 'Davao del Sur', 'Davao de Oro', 'Davao Occidental', 'Davao Oriental', 'Dinagat Islands', 'Eastern Samar', 'Guimaras', 'Ifugao', 'Ilocos Norte', 'Ilocos Sur', 'Iloilo', 'Isabela', 'Kalinga', 'La Union', 'Laguna', 'Lanao del Norte', 'Lanao del Sur', 'Leyte', 'Maguindanao', 'Marinduque', 'Masbate', 'Metro Manila', 'Misamis Occidental', 'Misamis Oriental', 'Mountain Province', 'Negros Occidental', 'Negros Oriental', 'Northern Samar', 'Nueva Ecija', 'Nueva Vizcaya', 'Occidental Mindoro', 'Oriental Mindoro', 'Palawan', 'Pampanga', 'Pangasinan', 'Quezon', 'Quirino', 'Rizal', 'Romblon', 'Samar', 'Sarangani', 'Siquijor', 'Sorsogon', 'South Cotabato', 'Southern Leyte', 'Sultan Kudarat', 'Sulu', 'Surigao del Norte', 'Surigao del Sur', 'Tarlac', 'Tawi-Tawi', 'Zambales', 'Zamboanga del Norte', 'Zamboanga del Sur', 'Zamboanga Sibugay'];
                        break;
                    case 'Poland':
                        states = ['Greater Poland', 'Kuyavian-Pomeranian', 'Lesser Poland', 'Lodz', 'Lower Silesian', 'Lublin', 'Lubusz', 'Masovian', 'Opole', 'Podlaskie', 'Pomeranian', 'Silesian', 'Subcarpathian', 'Swietokrzyskie', 'Warmian-Masurian', 'West Pomeranian'];
                        break;
                    case 'Portugal':
                        states = ['Aveiro', 'Azores', 'Beja', 'Braga', 'Braganca', 'Castelo Branco', 'Coimbra', 'Evora', 'Faro', 'Guarda', 'Leiria', 'Lisboa', 'Madeira', 'Portalegre', 'Porto', 'Santarem', 'Setubal', 'Viana do Castelo', 'Vila Real', 'Viseu'];
                        break;
                    case 'Qatar':
                        states = ['Al Daayen', 'Al Khor', 'Al Rayyan', 'Al Shamal', 'Al Wakrah', 'Doha', 'Umm Salal', 'Al Shahaniya'];
                        break;
                    case 'Romania':
                        states = ['Alba', 'Arad', 'Arges', 'Bacau', 'Bihor', 'Bistrita-Nasaud', 'Botosani', 'Braila', 'Brasov', 'Bucharest', 'Buzau', 'Calarasi', 'Caras-Severin', 'Cluj', 'Constanta', 'Covasna', 'Dambovita', 'Dolj', 'Galati', 'Giurgiu', 'Gorj', 'Harghita', 'Hunedoara', 'Ialomita', 'Iasi', 'Ilfov', 'Maramures', 'Mehedinti', 'Mures', 'Neamt', 'Olt', 'Prahova', 'Salaj', 'Satu Mare', 'Sibiu', 'Suceava', 'Teleorman', 'Timis', 'Tulcea', 'Valcea', 'Vaslui', 'Vrancea'];
                        break;
                    case 'Rwanda':
                        states = ['Eastern', 'Kigali', 'Northern', 'Southern', 'Western'];
                        break;
                    case 'Saint Kitts and Nevis':
                        states = ['Christ Church Nichola Town', 'Saint Anne Sandy Point', 'Saint George Basseterre', 'Saint George Gingerland', 'Saint James Windward', 'Saint John Capesterre', 'Saint John Figtree', 'Saint Mary Cayon', 'Saint Paul Capesterre', 'Saint Paul Charlestown', 'Saint Peter Basseterre', 'Saint Thomas Lowland', 'Saint Thomas Middle Island', 'Trinity Palmetto Point'];
                        break;
                    case 'Saint Lucia':
                        states = ['Anse la Raye', 'Canaries', 'Castries', 'Choiseul', 'Dennery', 'Gros Islet', 'Laborie', 'Micoud', 'Soufriere', 'Vieux Fort'];
                        break;
                    case 'Saint Vincent and the Grenadines':
                        states = ['Charlotte', 'Grenadines', 'Saint Andrew', 'Saint David', 'Saint George', 'Saint Patrick'];
                        break;
                    case 'Samoa':
                        states = ['A\'ana', 'Aiga-i-le-Tai', 'Atua', 'Fa\'asaleleaga', 'Gaga\'emauga', 'Gaga\'ifomauga', 'Palauli', 'Satupa\'itea', 'Tuamasaga', 'Va\'a-o-Fonoti', 'Vaisigano'];
                        break;
                    case 'San Marino':
                        states = ['Acquaviva', 'Borgo Maggiore', 'Chiesanuova', 'Domagnano', 'Faetano', 'Fiorentino', 'Montegiardino', 'San Marino', 'Serravalle'];
                        break;
                    case 'Sao Tome and Principe':
                        states = ['Principe', 'Sao Tome'];
                        break;
                    case 'Saudi Arabia':
                        states = ['Al Bahah', 'Al Hudud ash Shamaliyah', 'Al Jawf', 'Al Madinah al Munawwarah', 'Al Qasim', 'Ar Riyad', 'Ash Sharqiyah', 'Asir', 'Hail', 'Jazan', 'Makkah al Mukarramah', 'Najran', 'Tabuk'];
                        break;
                    case 'Senegal':
                        states = ['Dakar', 'Diourbel', 'Fatick', 'Kaffrine', 'Kaolack', 'Kedougou', 'Kolda', 'Louga', 'Matam', 'Saint-Louis', 'Sedhiou', 'Tambacounda', 'Thies', 'Ziguinchor'];
                        break;
                    case 'Serbia':
                        states = ['Belgrade', 'Bor', 'Branicevo', 'Jablanica', 'Kolubara', 'Macva', 'Moravica', 'Nisava', 'Pcinja', 'Pirot', 'Podunavlje', 'Pomoravlje', 'Rasina', 'Raska', 'South Backa', 'South Banat', 'Sumadija', 'Toplica', 'Vojvodina', 'West Backa', 'Zajecar', 'Zlatibor'];
                        break;
                    case 'Seychelles':
                        states = ['Anse aux Pins', 'Anse Boileau', 'Anse Etoile', 'Anse Louis', 'Anse Royale', 'Baie Lazare', 'Baie Sainte Anne', 'Beau Vallon', 'Bel Air', 'Bel Ombre', 'Cascade', 'Glacis', 'Grand Anse Mahe', 'Grand Anse Praslin', 'La Digue', 'La Riviere Anglaise', 'Mont Buxton', 'Mont Fleuri', 'Plaisance', 'Pointe La Rue', 'Port Glaud', 'Saint Louis', 'Takamaka'];
                        break;
                    case 'Sierra Leone':
                        states = ['Eastern', 'Northern', 'North West', 'Southern', 'Western Area'];
                        break;
                    case 'Singapore':
                        states = ['Central Region', 'East Region', 'North Region', 'North-East Region', 'West Region'];
                        break;
                    case 'Slovakia':
                        states = ['Banskobystricky', 'Bratislavsky', 'Kosicky', 'Nitriansky', 'Presovsky', 'Trenciansky', 'Trnavsky', 'Zilinsky'];
                        break;
                    case 'Slovenia':
                        states = ['Central Slovenia', 'Coastal-Karst', 'Drava', 'Gorizia', 'Lower Sava', 'Mura', 'Savinja', 'Southeast Slovenia', 'Upper Carniola', 'Carinthia', 'Central Sava', 'Littoral-Inner Carniola'];
                        break;
                    case 'Solomon Islands':
                        states = ['Central', 'Choiseul', 'Guadalcanal', 'Honiara', 'Isabel', 'Makira-Ulawa', 'Malaita', 'Rennell and Bellona', 'Temotu', 'Western'];
                        break;
                    case 'Somalia':
                        states = ['Awdal', 'Bakool', 'Banaadir', 'Bari', 'Bay', 'Galguduud', 'Gedo', 'Hiiraan', 'Jubbada Dhexe', 'Jubbada Hoose', 'Mudug', 'Nugaal', 'Sanaag', 'Shabeellaha Dhexe', 'Shabeellaha Hoose', 'Sool', 'Togdheer', 'Woqooyi Galbeed'];
                        break;
                    case 'South Africa':
                        states = ['Eastern Cape', 'Free State', 'Gauteng', 'KwaZulu-Natal', 'Limpopo', 'Mpumalanga', 'Northern Cape', 'North West', 'Western Cape'];
                        break;
                    case 'South Sudan':
                        states = ['Central Equatoria', 'Eastern Equatoria', 'Jonglei', 'Lakes', 'Northern Bahr el Ghazal', 'Unity', 'Upper Nile', 'Warrap', 'Western Bahr el Ghazal', 'Western Equatoria'];
                        break;
                    case 'Spain':
                        states = ['Andalusia', 'Aragon', 'Asturias', 'Balearic Islands', 'Basque Country', 'Canary Islands', 'Cantabria', 'Castile and Leon', 'Castile-La Mancha', 'Catalonia', 'Ceuta', 'Extremadura', 'Galicia', 'La Rioja', 'Madrid', 'Melilla', 'Murcia', 'Navarre', 'Valencia'];
                        break;
                    case 'Sri Lanka':
                        states = ['Central', 'Eastern', 'North Central', 'Northern', 'North Western', 'Sabaragamuwa', 'Southern', 'Uva', 'Western'];
                        break;
                    case 'Sudan':
                        states = ['Al Jazirah', 'Blue Nile', 'Central Darfur', 'East Darfur', 'Gedaref', 'Kassala', 'Khartoum', 'North Darfur', 'North Kordofan', 'Northern', 'Red Sea', 'River Nile', 'Sennar', 'South Darfur', 'South Kordofan', 'West Darfur', 'West Kordofan', 'White Nile'];
                        break;
                    case 'Suriname':
                        states = ['Brokopondo', 'Commewijne', 'Coronie', 'Marowijne', 'Nickerie', 'Para', 'Paramaribo', 'Saramacca', 'Sipaliwini', 'Wanica'];
                        break;
                    case 'Sweden':
                        states = ['Blekinge', 'Dalarna', 'Gavleborg', 'Gotland', 'Halland', 'Jamtland', 'Jonkoping', 'Kalmar', 'Kronoberg', 'Norrbotten', 'Orebro', 'Ostergotland', 'Skane', 'Sodermanland', 'Stockholm', 'Uppsala', 'Varmland', 'Vasterbotten', 'Vasternorrland', 'Vastmanland', 'Vastra Gotaland'];
                        break;
                    case 'Switzerland':
                        states = ['Aargau', 'Appenzell Ausserrhoden', 'Appenzell Innerrhoden', 'Basel-Landschaft', 'Basel-Stadt', 'Bern', 'Fribourg', 'Geneva', 'Glarus', 'Graubunden', 'Jura', 'Lucerne', 'Neuchatel', 'Nidwalden', 'Obwalden', 'Schaffhausen', 'Schwyz', 'Solothurn', 'St. Gallen', 'Thurgau', 'Ticino', 'Uri', 'Valais', 'Vaud', 'Zug', 'Zurich'];
                        break;
                    case 'Syria':
                        states = ['Al-Hasakah', 'Al-Ladhiqiyah', 'Al-Qunaytirah', 'Ar-Raqqah', 'As-Suwayda', 'Damascus', 'Damascus Countryside', 'Daraa', 'Deir ez-Zor', 'Hama', 'Homs', 'Idlib', 'Rif Dimashq', 'Tartus'];
                        break;
                    case 'Taiwan':
                        states = ['Changhua', 'Chiayi City', 'Chiayi County', 'Hsinchu City', 'Hsinchu County', 'Hualien', 'Kaohsiung', 'Keelung', 'Kinmen', 'Lienchiang', 'Miaoli', 'Nantou', 'New Taipei', 'Penghu', 'Pingtung', 'Taichung', 'Tainan', 'Taipei', 'Taitung', 'Taoyuan', 'Yilan', 'Yunlin'];
                        break;
                    case 'Tajikistan':
                        states = ['Districts of Republican Subordination', 'Dushanbe', 'Gorno-Badakhshan', 'Khatlon', 'Sughd'];
                        break;
                    case 'Tanzania':
                        states = ['Arusha', 'Dar es Salaam', 'Dodoma', 'Geita', 'Iringa', 'Kagera', 'Katavi', 'Kigoma', 'Kilimanjaro', 'Lindi', 'Manyara', 'Mara', 'Mbeya', 'Morogoro', 'Mtwara', 'Mwanza', 'Njombe', 'Pemba North', 'Pemba South', 'Pwani', 'Rukwa', 'Ruvuma', 'Shinyanga', 'Simiyu', 'Singida', 'Songwe', 'Tabora', 'Tanga', 'Unguja North', 'Unguja South'];
                        break;
                    case 'Thailand':
                        states = ['Amnat Charoen', 'Ang Thong', 'Bangkok', 'Bueng Kan', 'Buri Ram', 'Chachoengsao', 'Chai Nat', 'Chaiyaphum', 'Chanthaburi', 'Chiang Mai', 'Chiang Rai', 'Chon Buri', 'Chumphon', 'Kalasin', 'Kamphaeng Phet', 'Kanchanaburi', 'Khon Kaen', 'Krabi', 'Lampang', 'Lamphun', 'Loei', 'Lop Buri', 'Mae Hong Son', 'Maha Sarakham', 'Mukdahan', 'Nakhon Nayok', 'Nakhon Pathom', 'Nakhon Phanom', 'Nakhon Ratchasima', 'Nakhon Sawan', 'Nakhon Si Thammarat', 'Nan', 'Narathiwat', 'Nong Bua Lam Phu', 'Nong Khai', 'Nonthaburi', 'Pathum Thani', 'Pattani', 'Phang Nga', 'Phatthalung', 'Phayao', 'Phetchabun', 'Phetchaburi', 'Phichit', 'Phitsanulok', 'Phra Nakhon Si Ayutthaya', 'Phrae', 'Phuket', 'Prachin Buri', 'Prachuap Khiri Khan', 'Ranong', 'Ratchaburi', 'Rayong', 'Roi Et', 'Sa Kaeo', 'Sakon Nakhon', 'Samut Prakan', 'Samut Sakhon', 'Samut Songkhram', 'Saraburi', 'Satun', 'Sing Buri', 'Sisaket', 'Songkhla', 'Sukhothai', 'Suphan Buri', 'Surat Thani', 'Surin', 'Tak', 'Trang', 'Trat', 'Ubon Ratchathani', 'Udon Thani', 'Uthai Thani', 'Uttaradit', 'Yala', 'Yasothon'];
                        break;
                    case 'Togo':
                        states = ['Centrale', 'Kara', 'Maritime', 'Plateaux', 'Savanes'];
                        break;
                    case 'Tonga':
                        states = ['Eua', 'Ha\'apai', 'Niuas', 'Tongatapu', 'Vava\'u'];
                        break;
                    case 'Trinidad and Tobago':
                        states = ['Arima', 'Chaguanas', 'Couva-Tabaquite-Talparo', 'Diego Martin', 'Eastern Tobago', 'Penal-Debe', 'Point Fortin', 'Port of Spain', 'Princes Town', 'Rio Claro-Mayaro', 'San Fernando', 'San Juan-Laventille', 'Sangre Grande', 'Siparia', 'Tunapuna-Piarco', 'Western Tobago'];
                        break;
                    case 'Tunisia':
                        states = ['Ariana', 'Beja', 'Ben Arous', 'Bizerte', 'Gabes', 'Gafsa', 'Jendouba', 'Kairouan', 'Kasserine', 'Kebili', 'Kef', 'Mahdia', 'Manouba', 'Medenine', 'Monastir', 'Nabeul', 'Sfax', 'Sidi Bouzid', 'Siliana', 'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'];
                        break;
                    case 'Turkey':
                        states = ['Adana', 'Adiyaman', 'Afyonkarahisar', 'Agri', 'Aksaray', 'Amasya', 'Ankara', 'Antalya', 'Ardahan', 'Artvin', 'Aydin', 'Balikesir', 'Bartin', 'Batman', 'Bayburt', 'Bilecik', 'Bingol', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Canakkale', 'Cankiri', 'Corum', 'Denizli', 'Diyarbakir', 'Duzce', 'Edirne', 'Elazig', 'Erzincan', 'Erzurum', 'Eskisehir', 'Gaziantep', 'Giresun', 'Gumushane', 'Hakkari', 'Hatay', 'Igdir', 'Isparta', 'Istanbul', 'Izmir', 'Kahramanmaras', 'Karabuk', 'Karaman', 'Kars', 'Kastamonu', 'Kayseri', 'Kirikkale', 'Kirklareli', 'Kirsehir', 'Kilis', 'Kocaeli', 'Konya', 'Kutahya', 'Malatya', 'Manisa', 'Mardin', 'Mersin', 'Mugla', 'Mus', 'Nevsehir', 'Nigde', 'Ordu', 'Osmaniye', 'Rize', 'Sakarya', 'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Sanliurfa', 'Sirnak', 'Tekirdag', 'Tokat', 'Trabzon', 'Tunceli', 'Usak', 'Van', 'Yalova', 'Yozgat', 'Zonguldak'];
                        break;
                    case 'Turkmenistan':
                        states = ['Ahal', 'Ashgabat', 'Balkan', 'Dashoguz', 'Lebap', 'Mary'];
                        break;
                    case 'Tuvalu':
                        states = ['Funafuti', 'Nanumaga', 'Nanumea', 'Niutao', 'Nui', 'Nukufetau', 'Nukulaelae', 'Vaitupu'];
                        break;
                    case 'Uganda':
                        states = ['Central', 'Eastern', 'Northern', 'Western'];
                        break;
                    case 'Ukraine':
                        states = ['Cherkasy', 'Chernihiv', 'Chernivtsi', 'Dnipropetrovsk', 'Donetsk', 'Ivano-Frankivsk', 'Kharkiv', 'Kherson', 'Khmelnytskyi', 'Kiev', 'Kirovohrad', 'Luhansk', 'Lviv', 'Mykolaiv', 'Odessa', 'Poltava', 'Rivne', 'Sumy', 'Ternopil', 'Vinnytsia', 'Volyn', 'Zakarpattia', 'Zaporizhzhia', 'Zhytomyr'];
                        break;
                    case 'United Arab Emirates':
                        states = ['Abu Dhabi', 'Ajman', 'Dubai', 'Fujairah', 'Ras Al Khaimah', 'Sharjah', 'Umm Al Quwain'];
                        break;
                    case 'Uruguay':
                        states = ['Artigas', 'Canelones', 'Cerro Largo', 'Colonia', 'Durazno', 'Flores', 'Florida', 'Lavalleja', 'Maldonado', 'Montevideo', 'Paysandu', 'Rio Negro', 'Rivera', 'Rocha', 'Salto', 'San Jose', 'Soriano', 'Tacuarembo', 'Treinta y Tres'];
                        break;
                    case 'Uzbekistan':
                        states = ['Andijan', 'Bukhara', 'Fergana', 'Jizzakh', 'Karakalpakstan', 'Kashkadarya', 'Khorezm', 'Namangan', 'Navoiy', 'Qashqadaryo', 'Samarkand', 'Sirdaryo', 'Surkhandarya', 'Tashkent', 'Tashkent City'];
                        break;
                    case 'Vanuatu':
                        states = ['Malampa', 'Penama', 'Sanma', 'Shefa', 'Tafea', 'Torba'];
                        break;
                    case 'Vatican City':
                        states = ['Vatican City'];
                        break;
                    case 'Venezuela':
                        states = ['Amazonas', 'Anzoategui', 'Apure', 'Aragua', 'Barinas', 'Bolivar', 'Carabobo', 'Cojedes', 'Delta Amacuro', 'Distrito Capital', 'Falcon', 'Guarico', 'Lara', 'Merida', 'Miranda', 'Monagas', 'Nueva Esparta', 'Portuguesa', 'Sucre', 'Tachira', 'Trujillo', 'Vargas', 'Yaracuy', 'Zulia'];
                        break;
                    case 'Vietnam':
                        states = ['An Giang', 'Ba Ria-Vung Tau', 'Bac Giang', 'Bac Kan', 'Bac Lieu', 'Bac Ninh', 'Ben Tre', 'Binh Dinh', 'Binh Duong', 'Binh Phuoc', 'Binh Thuan', 'Ca Mau', 'Can Tho', 'Cao Bang', 'Da Nang', 'Dak Lak', 'Dak Nong', 'Dien Bien', 'Dong Nai', 'Dong Thap', 'Gia Lai', 'Ha Giang', 'Ha Nam', 'Ha Noi', 'Ha Tinh', 'Hai Duong', 'Hai Phong', 'Hau Giang', 'Ho Chi Minh City', 'Hoa Binh', 'Hung Yen', 'Khanh Hoa', 'Kien Giang', 'Kon Tum', 'Lai Chau', 'Lam Dong', 'Lang Son', 'Lao Cai', 'Long An', 'Nam Dinh', 'Nghe An', 'Ninh Binh', 'Ninh Thuan', 'Phu Tho', 'Phu Yen', 'Quang Binh', 'Quang Nam', 'Quang Ngai', 'Quang Ninh', 'Quang Tri', 'Soc Trang', 'Son La', 'Tay Ninh', 'Thai Binh', 'Thai Nguyen', 'Thanh Hoa', 'Thua Thien-Hue', 'Tien Giang', 'Tra Vinh', 'Tuyen Quang', 'Vinh Long', 'Vinh Phuc', 'Yen Bai'];
                        break;
                    case 'Yemen':
                        states = ['Abyan', 'Aden', 'Al Bayda', 'Al Hudaydah', 'Al Jawf', 'Al Mahrah', 'Al Mahwit', 'Amran', 'Dhamar', 'Hadramaut', 'Hajjah', 'Ibb', 'Lahij', 'Ma\'rib', 'Raymah', 'Sa\'dah', 'Sana\'a', 'Shabwah', 'Socotra', 'Ta\'izz'];
                        break;
                    case 'Zambia':
                        states = ['Central', 'Copperbelt', 'Eastern', 'Luapula', 'Lusaka', 'Muchinga', 'Northern', 'North-Western', 'Southern', 'Western'];
                        break;
                    case 'Zimbabwe':
                        states = ['Bulawayo', 'Harare', 'Manicaland', 'Mashonaland Central', 'Mashonaland East', 'Mashonaland West', 'Masvingo', 'Matabeleland North', 'Matabeleland South', 'Midlands'];
                        break;
                    // Add alternative name for Côte d'Ivoire
                    case 'Ivory Coast':
                    case 'Côte d\'Ivoire':
                        states = ['Abidjan', 'Bas-Sassandra', 'Comoé', 'Denguélé', 'Gôh-Djiboua', 'Lacs', 'Lagunes', 'Montagnes', 'Sassandra-Marahoué', 'Savanes', 'Vallée du Bandama', 'Woroba', 'Yamoussoukro', 'Zanzan'];
                        break;
                    default:
                        console.log('No states found for country:', selectedCountry); // Debug log
                        stateContainer.style.display = 'none';
                        return;
                }

                console.log('Found', states.length, 'states for', selectedCountry); // Debug log
                states.forEach(stateName => {
                    const option = document.createElement('option');
                    option.value = stateName;
                    option.textContent = stateName;
                    stateSelect.appendChild(option);
                });
                console.log('State container shown for', selectedCountry); // Debug log
            } else {
                stateContainer.style.display = 'none';
                console.log('State container hidden - no country selected'); // Debug log
            }
        }

    </script>
</body>
</html>
