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
                    <form id="chatForm" aria-label="Chatying join form">
                        <div class="mb-3">
                            <label for="nickname" class="form-label">Choose a Nickname</label>
                            <input type="text" class="form-control" id="nickname" placeholder="Enter your nickname" required aria-describedby="nicknameHelp">
                            <div id="nicknameHelp" class="form-text">Your nickname is how others will see you in the chat.</div>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" required aria-describedby="genderHelp">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            <div id="genderHelp" class="form-text">Select your gender to personalize your chat experience.</div>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <select class="form-select" id="age" required aria-describedby="ageHelp">
                                <option value="">Select Age</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
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
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" required onchange="populateStates()" aria-describedby="countryHelp">
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
                        </div>
                        <div class="mb-3" id="stateContainer" style="display: none;">
                            <label for="state" class="form-label">State/Province</label>
                            <select class="form-select" id="state" aria-describedby="stateHelp">
                                <option value="">Select State/Province</option>
                            </select>
                            <div id="stateHelp" class="form-text">Select your state or province, if applicable.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" onclick="startChat(event)">Enter Chat Room</button>
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

        // Chat form submission
        function startChat(event) {
            event.preventDefault();
            const nickname = document.getElementById('nickname').value;
            const gender = document.getElementById('gender').value;
            const age = document.getElementById('age').value;
            const country = document.getElementById('country').value;
            const state = document.getElementById('state').value;

            if (nickname && gender && age && country) {
                // Save nickname to session storage
                sessionStorage.setItem('nickname', nickname);
                // Redirect in the same tab to chat room
                window.location.href = "{{ route('chat.room') }}";
            }
        }

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

        // Function to populate states based on country selection
        function populateStates() {
            const countrySelect = document.getElementById('country');
            const stateSelect = document.getElementById('state');
            const stateContainer = document.getElementById('stateContainer');
            const selectedCountry = countrySelect.value;

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
                    default:
                        stateContainer.style.display = 'none';
                        return;
                }

                states.forEach(stateName => {
                    const option = document.createElement('option');
                    option.value = stateName;
                    option.textContent = stateName;
                    stateSelect.appendChild(option);
                });
            } else {
                stateContainer.style.display = 'none';
            }
        }

    </script>
</body>
</html>
