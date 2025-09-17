<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chatying - Free Online Chat Room</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Join Chatying's free online chat room to connect with authentic users worldwide. Chat, share media, and meet new people securely.">
    <meta name="keywords" content="online chat, free chat room, Chatying, social chat, meet new people, chat online, media sharing">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Chatying Team">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Chatying - Free Online Chat Room">
    <meta property="og:description" content="Join Chatying to chat online with people worldwide. No registration or downloads needed for instant connections.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:site_name" content="Chatying">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Chatying - Free Online Chat Room">
    <meta name="twitter:description" content="Join Chatying to chat online with people worldwide. No registration or downloads needed for instant connections.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #2C3E50;
            --secondary: #3498DB;
            --background: #F4F7FA;
            --white: #FFFFFF;
            --text: #34495E;
            --accent: #E74C3C;
        }
        
        body {
            font-family: 'Inter', Arial, sans-serif;
            background-color: var(--background);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .bg-custom {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
        
        .navbar {
            padding: 1rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--white) !important;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
        }
        
        .navbar-brand:hover {
            transform: scale(1.05);
        }
        
        .user-info {
            display: flex;
            align-items: center;
            color: var(--white);
            gap: 1rem;
        }
        
        .status-indicator {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }
        
        .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #2ECC71;
            margin-right: 0.5rem;
        }
        
        .message-icon {
            position: relative;
            cursor: pointer;
            color: var(--white);
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        
        .message-icon:hover {
            color: var(--accent);
        }
        
        .message-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--accent);
            color: var(--white);
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: 600;
        }
        
        .messages-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            width: 300px;
            max-height: 400px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }
        
        .messages-dropdown.show {
            display: block;
        }
        
        .dropdown-header {
            padding: 1rem;
            border-bottom: 1px solid #dee2e6;
            font-weight: 600;
            color: var(--primary);
        }
        
        .message-item {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #f1f3f4;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .message-item:hover {
            background-color: #f8f9fa;
        }
        
        .message-item:last-child {
            border-bottom: none;
        }
        
        .message-sender {
            font-weight: 600;
            color: var(--primary);
            font-size: 0.9rem;
        }
        
        .message-preview {
            color: var(--text);
            font-size: 0.8rem;
            margin: 0.25rem 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .message-time {
            font-size: 0.7rem;
            color: #6B7280;
        }
        
        .logout-btn {
            background: transparent;
            border: 1px solid var(--white);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }
        
        .logout-btn:hover {
            background-color: var(--accent);
            border-color: var(--accent);
            color: var(--white);
        }
        
        .chat-container {
            flex: 1;
            display: flex;
            height: calc(100vh - 200px);
            margin: 20px 0;
        }
        
        .sidebar {
            width: 250px;
            background-color: var(--white);
            border-right: 1px solid #dee2e6;
            padding: 1rem;
            overflow-y: auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .sidebar h3 {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .user-list {
            list-style: none;
            padding: 0;
        }
        
        .user-list li {
            padding: 0.75rem;
            border-radius: 6px;
            margin-bottom: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .user-item-header {
            display: flex;
            align-items: center;
            width: 100%;
            margin-bottom: 0.25rem;
        }
        
        .user-details {
            font-size: 0.75rem;
            color: #6B7280;
            margin-left: 1.5rem;
            line-height: 1.2;
        }
        
        .user-list li.active .user-details {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .user-icon-female {
            color: #E91E63 !important;
        }
        
        .user-icon-male {
            color: #2196F3 !important;
        }
        
        .user-list li:hover {
            background-color: #E8ECEF;
            transform: translateX(5px);
        }
        
        .user-list li.active {
            background-color: var(--secondary);
            color: var(--white);
        }
        
        .user-list .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #2ECC71;
            margin-right: 0.5rem;
        }
        
        .chat-area {
            flex: 1;
            display: flex;
            flex-direction: column;
            background-color: var(--white);
            border-radius: 12px;
            margin: 0 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .chat-header {
            padding: 1rem;
            border-bottom: 1px solid #dee2e6;
            background-color: var(--primary);
            color: var(--white);
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .call-buttons button {
            margin-left: 10px;
        }
        
        .chat-messages {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
            background-color: #F9FAFB;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            justify-content: flex-start;
            min-height: 300px;
        }
        
        .chat-messages.empty {
            color: #6B7280;
            font-size: 1.1rem;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        
        .message {
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
        }
        
        .message.sent {
            align-items: flex-end;
        }
        
        .message.received {
            align-items: flex-start;
        }
        
        .message-content {
            max-width: 70%;
            padding: 0.75rem;
            border-radius: 8px;
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .message.sent .message-content {
            background-color: var(--secondary);
            color: var(--white);
        }
        
        .message.received .message-content {
            background-color: #E8ECEF;
            color: var(--text);
        }
        
        .message-time {
            font-size: 0.8rem;
            color: #6B7280;
            margin-top: 0.2rem;
        }
        
        .chat-input {
            padding: 1rem;
            border-top: 1px solid #dee2e6;
            background-color: var(--white);
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }
        
        .chat-input form {
            display: flex;
            align-items: center;
        }
        
        .chat-input input[type="text"] {
            flex: 1;
            padding: 0.75rem;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            margin-right: 0.5rem;
        }
        
        .media-buttons {
            display: flex;
            align-items: center;
            margin-right: 0.5rem;
        }
        
        .media-buttons label {
            cursor: pointer;
            margin: 0 0.3rem;
            color: var(--primary);
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        
        .media-buttons label:hover {
            color: var(--accent);
        }
        
        .media-buttons input {
            display: none;
        }
        
        .chat-input button {
            background-color: var(--accent);
            border-color: var(--accent);
            color: var(--white);
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .chat-input button:hover {
            background-color: #C0392B;
            border-color: #C0392B;
            transform: translateY(-2px);
        }
        
        .voice-record-btn {
            border: none !important;
            background: none !important;
            color: var(--primary) !important;
            transition: all 0.3s ease;
        }
        
        .voice-record-btn:hover {
            color: var(--accent) !important;
        }
        
        .voice-record-btn.recording {
            color: #28a745 !important;
            animation: recording-pulse 1s infinite;
        }
        
        @keyframes recording-pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .ad-space {
            height: 100px;
            background-color: #E8ECEF;
            border: 1px solid #dee2e6;
            margin: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .media-preview {
            max-width: 200px;
            max-height: 150px;
            border-radius: 8px;
            margin: 0.5rem 0;
            cursor: pointer;
        }
        
        .media-preview img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        
        .media-preview video {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        
        .file-preview {
            display: flex;
            align-items: center;
            padding: 0.5rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            margin: 0.5rem 0;
            cursor: pointer;
        }
        
        .file-icon {
            font-size: 2rem;
            margin-right: 0.75rem;
            color: var(--accent);
        }
        
        .file-info {
            flex: 1;
        }
        
        .file-name {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.25rem;
        }
        
        .file-size {
            font-size: 0.75rem;
            opacity: 0.8;
        }
        
        .call-interface {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--white);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            z-index: 2000;
            display: none;
            text-align: center;
            min-width: 300px;
        }
        
        .call-interface.show {
            display: block;
        }
        
        .call-video {
            width: 100%;
            max-width: 400px;
            height: 300px;
            background-color: #000;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        
        .call-controls {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .call-controls button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .call-controls .end-call {
            background-color: var(--accent);
            color: white;
        }
        
        .call-controls .mute-btn {
            background-color: #6c757d;
            color: white;
        }
        
        .call-controls .video-btn {
            background-color: var(--secondary);
            color: white;
        }
        
        .call-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1999;
            display: none;
        }
        
        .call-overlay.show {
            display: block;
        }
        
        /* Chat Tabs Styling */
        .chat-tabs {
            display: flex;
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            overflow-x: auto;
            flex-wrap: nowrap;
            min-height: 50px;
        }
        
        .tab-item {
            flex: 0 0 auto;
            min-width: 120px;
            max-width: 200px;
            padding: 12px 16px;
            background-color: #e9ecef;
            border-right: 1px solid #dee2e6;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
            position: relative;
            white-space: nowrap;
        }
        
        .tab-item:hover {
            background-color: #dee2e6;
        }
        
        .tab-item.active {
            background-color: var(--white);
            border-bottom: 3px solid var(--secondary);
        }
        
        .tab-item:first-child {
            border-top-left-radius: 12px;
        }
        
        .tab-title {
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--primary);
            overflow: hidden;
            text-overflow: ellipsis;
            flex: 1;
        }
        
        .tab-close {
            margin-left: 8px;
            color: #6c757d;
            font-size: 0.8rem;
            padding: 2px 6px;
            border-radius: 3px;
            transition: all 0.2s ease;
            opacity: 0;
        }
        
        .tab-item:hover .tab-close {
            opacity: 1;
        }
        
        .tab-close:hover {
            background-color: #dc3545;
            color: white;
        }
        
        .chat-tab-content {
            display: none;
            flex: 1;
            flex-direction: column;
            height: 100%;
        }
        
        .chat-tab-content.active {
            display: flex;
        }
        
        .tab-unread-indicator {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background-color: var(--accent);
            border-radius: 50%;
            display: none;
        }
        
        .tab-item.has-unread .tab-unread-indicator {
            display: block;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                max-height: 200px;
            }
            
            .chat-container {
                flex-direction: column;
            }
            
            .chat-area {
                margin: 0;
                border-radius: 0;
            }
            
            .media-buttons {
                flex-wrap: wrap;
            }
            
            .media-buttons label {
                font-size: 1rem;
            }
            
            .ad-space {
                margin: 0.5rem;
                height: 80px;
            }
            
            .user-info {
                flex-direction: column;
                align-items: flex-end;
                gap: 0.5rem;
            }
            
            .messages-dropdown {
                width: 280px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-comments" style="margin-right: 0.5rem;"></i>
                Chatying
            </a>
            
            <div class="user-info">
                <div class="status-indicator">
                    <span class="status-dot"></span>
                    Online
                </div>
                
                <div class="position-relative">
                    <div class="message-icon" onclick="toggleMessagesDropdown()" id="messageIcon">
                        <i class="fas fa-envelope"></i>
                        <span class="message-count" id="messageCount">3</span>
                    </div>
                    
                    <div class="messages-dropdown" id="messagesDropdown">
                        <div class="dropdown-header">Recent Messages</div>
                        <div class="message-item" onclick="openChat('Sarah')">
                            <div class="message-sender">Sarah</div>
                            <div class="message-preview">Hey! How are you doing today?</div>
                            <div class="message-time">2 min ago</div>
                        </div>
                        <div class="message-item" onclick="openChat('Jacob')">
                            <div class="message-sender">Jacob</div>
                            <div class="message-preview">Did you see the latest update?</div>
                            <div class="message-time">5 min ago</div>
                        </div>
                        <div class="message-item" onclick="openChat('Andrea')">
                            <div class="message-sender">Andrea</div>
                            <div class="message-preview">Thanks for your help earlier!</div>
                            <div class="message-time">10 min ago</div>
                        </div>
                    </div>
                </div>
                
                <button class="logout-btn" onclick="logout()">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="container-fluid">
        <div class="chat-container">
            <!-- Sidebar: Online Users -->
            <section class="sidebar" aria-label="Online Users">
                <h3>Online Users</h3>
                <ul class="user-list" id="userList">
                    <li onclick="selectUser(this, 'Sarah')">
                        <div class="user-item-header">
                            <span class="status-dot" aria-label="Online"></span>
                            <i class="fas fa-user user-icon-female" style="margin-right:6px;"></i>
                            Sarah
                        </div>
                        <div class="user-details">
                            25, USA, California
                        </div>
                    </li>
                    <li onclick="selectUser(this, 'Jacob')">
                        <div class="user-item-header">
                            <span class="status-dot" aria-label="Online"></span>
                            <i class="fas fa-user user-icon-male" style="margin-right:6px;"></i>
                            Jacob
                        </div>
                        <div class="user-details">
                            28, UK, London
                        </div>
                    </li>
                    <li onclick="selectUser(this, 'Andrea')">
                        <div class="user-item-header">
                            <span class="status-dot" aria-label="Online"></span>
                            <i class="fas fa-user user-icon-female" style="margin-right:6px;"></i>
                            Andrea
                        </div>
                        <div class="user-details">
                            22, Canada, Toronto
                        </div>
                    </li>
                    <li onclick="selectUser(this, 'Philip')">
                        <div class="user-item-header">
                            <span class="status-dot" aria-label="Online"></span>
                            <i class="fas fa-user user-icon-male" style="margin-right:6px;"></i>
                            Philip
                        </div>
                        <div class="user-details">
                            31, Australia, Sydney
                        </div>
                    </li>
                    <li onclick="selectUser(this, 'Ashley')">
                        <div class="user-item-header">
                            <span class="status-dot" aria-label="Online"></span>
                            <i class="fas fa-user user-icon-female" style="margin-right:6px;"></i>
                            Ashley
                        </div>
                        <div class="user-details">
                            26, USA, New York
                        </div>
                    </li>
                    <li onclick="selectUser(this, 'Beth')">
                        <div class="user-item-header">
                            <span class="status-dot" aria-label="Online"></span>
                            <i class="fas fa-user user-icon-female" style="margin-right:6px;"></i>
                            Beth
                        </div>
                        <div class="user-details">
                            29, Germany, Berlin
                        </div>
                    </li>
                </ul>
            </section>
            
            <!-- Chat Area with Tabs -->
            <section class="chat-area" aria-label="Chat Window">
                <!-- Chat Tabs -->
                <div class="chat-tabs" id="chatTabs">
                    <div class="tab-item active" id="welcomeTab" onclick="switchToTab('welcome')">
                        <span class="tab-title">Welcome</span>
                    </div>
                </div>
                
                <!-- Welcome Tab Content -->
                <div class="chat-tab-content active" id="welcomeTabContent">
                    <div class="chat-header">
                        <h3>Welcome to Chatying</h3>
                        <div class="call-buttons" style="visibility: hidden;">
                            <button class="btn btn-success" title="Audio Call">
                                <i class="fas fa-phone"></i>
                            </button>
                            <button class="btn btn-info" title="Video Call">
                                <i class="fas fa-video"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="chat-messages empty">
                        <p>Welcome to Chatying!</p>
                        <p>Select a user from the sidebar to begin a conversation.</p>
                    </div>
                    
                    <div class="chat-input" style="opacity: 0.5; pointer-events: none;">
                        <form aria-label="Chat Input Form">
                            <div class="media-buttons">
                                <label title="Send Image">
                                    <i class="fas fa-image"></i>
                                </label>
                                <label title="Send File">
                                    <i class="fas fa-file"></i>
                                </label>
                                <label title="Send Video">
                                    <i class="fas fa-video"></i>
                                </label>
                                <button type="button" class="voice-record-btn" style="font-size: 1.2rem; padding: 0; margin: 0 0.3rem;" title="Voice Message">
                                    <i class="fas fa-microphone"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Select a user to start chatting..." disabled>
                            <button type="button" class="btn" disabled>Send</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <!-- Ad Space -->
        <div class="ad-space" aria-hidden="true"></div>
    </main>
    
    <!-- Call Interface -->
    <div class="call-overlay" id="callOverlay"></div>
    <div class="call-interface" id="callInterface">
        <h4 id="callTitle">Audio Call</h4>
        <div id="callStatus">Connecting...</div>
        <video id="localVideo" class="call-video" style="display:none;" autoplay muted></video>
        <video id="remoteVideo" class="call-video" style="display:none;" autoplay></video>
        <div class="call-controls">
            <button class="mute-btn" id="muteBtn" title="Mute/Unmute">
                <i class="fas fa-microphone"></i>
            </button>
            <button class="video-btn" id="videoBtn" title="Camera On/Off" style="display:none;">
                <i class="fas fa-video"></i>
            </button>
            <button class="end-call" id="endCallBtn" title="End Call">
                <i class="fas fa-phone-slash"></i>
            </button>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        let currentUser = null;
        let unreadCount = 3;
        let activeChats = {}; // Store active chat data for each user
        let currentActiveTab = 'welcome'; // Track current active tab
        
        function toggleMessagesDropdown() {
            const dropdown = document.getElementById('messagesDropdown');
            dropdown.classList.toggle('show');
        }
        
        function openChat(username) {
            selectUserByName(username);
            toggleMessagesDropdown();
        }
        
        function selectUser(element, username) {
            // Remove active class from all users
            document.querySelectorAll('.user-list li').forEach(li => {
                li.classList.remove('active');
            });
            
            // Add active class to selected user
            element.classList.add('active');
            
            // Create or switch to chat tab
            createChatTab(username);
        }
        
        function selectUserByName(username) {
            const userItems = document.querySelectorAll('.user-list li');
            userItems.forEach(item => {
                const usernameText = item.querySelector('.user-item-header').textContent.trim();
                if (usernameText.includes(username)) {
                    selectUser(item, username);
                }
            });
        }
        
        function sendMessage(event) {
            event.preventDefault();
            const messageInput = document.getElementById('messageInput');
            const messageText = messageInput.value.trim();
            
            if (messageText && currentUser) {
                const chatMessages = document.getElementById('chatMessages');
                chatMessages.classList.remove('empty');
                
                // Add sent message
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message', 'sent');
                messageDiv.innerHTML = `
                    <div class="message-content">${messageText}</div>
                    <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                `;
                chatMessages.appendChild(messageDiv);
                messageInput.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;
                
                // Demo auto-reply after 2 seconds
                setTimeout(() => {
                    const replies = [
                        "That's interesting! Tell me more.",
                        "I completely agree with you.",
                        "Thanks for sharing that with me.",
                        "How was your day today?",
                        "I'm glad to hear from you!",
                        "What do you think about that?"
                    ];
                    const randomReply = replies[Math.floor(Math.random() * replies.length)];
                    
                    const replyDiv = document.createElement('div');
                    replyDiv.classList.add('message', 'received');
                    replyDiv.innerHTML = `
                        <div class="message-content">${randomReply}</div>
                        <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                    `;
                    chatMessages.appendChild(replyDiv);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                    
                    // Update unread count (demo)
                    unreadCount++;
                    document.getElementById('messageCount').textContent = unreadCount;
                }, 2000);
            } else if (!currentUser) {
                alert('Please select a user to chat with first.');
            }
        }
        
        function startAudioCall() {
            if (currentUser) {
                alert(`Starting audio call with ${currentUser}...\n\nThis is a demo interface. In a real implementation, this would initiate an audio call.`);
            } else {
                alert('Please select a user to call first.');
            }
        }
        
        function startVideoCall() {
            if (currentUser) {
                alert(`Starting video call with ${currentUser}...\n\nThis is a demo interface. In a real implementation, this would initiate a video call.`);
            } else {
                alert('Please select a user to call first.');
            }
        }
        
        function logout() {
            if (confirm('Are you sure you want to logout?')) {
                // Clear session data
                sessionStorage.clear();
                localStorage.clear();
                
                // Redirect to home page
                window.location.href = '{{ url("/") }}';
            }
        }
        
        // Handle media uploads with proper previews
        document.getElementById('imageInput').addEventListener('change', (e) => {
            if (e.target.files[0]) {
                if (currentUser) {
                    const file = e.target.files[0];
                    const fileName = file.name;
                    const fileSize = formatFileSize(file.size);
                    const chatMessages = document.getElementById('chatMessages');
                    
                    // Create image URL for preview
                    const imageUrl = URL.createObjectURL(file);
                    
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'sent');
                    messageDiv.innerHTML = `
                        <div class="message-content">
                            <div class="media-preview">
                                <img src="${imageUrl}" alt="${fileName}" onclick="openImageModal('${imageUrl}', '${fileName}')" style="cursor: pointer; max-width: 200px; border-radius: 8px;">
                                <div style="font-size: 0.8rem; margin-top: 0.25rem; color: rgba(255,255,255,0.8);">${fileName} (${fileSize})</div>
                            </div>
                        </div>
                        <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                    `;
                    chatMessages.appendChild(messageDiv);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                } else {
                    alert('Please select a user to send the image to.');
                }
                e.target.value = '';
            }
        });
        
        document.getElementById('fileInput').addEventListener('change', (e) => {
            if (e.target.files[0]) {
                if (currentUser) {
                    const file = e.target.files[0];
                    const fileName = file.name;
                    const fileSize = formatFileSize(file.size);
                    const fileExtension = fileName.split('.').pop().toLowerCase();
                    const chatMessages = document.getElementById('chatMessages');
                    
                    // Determine file icon based on extension
                    let fileIcon = 'fas fa-file';
                    if (['pdf'].includes(fileExtension)) fileIcon = 'fas fa-file-pdf';
                    else if (['doc', 'docx'].includes(fileExtension)) fileIcon = 'fas fa-file-word';
                    else if (['txt'].includes(fileExtension)) fileIcon = 'fas fa-file-alt';
                    
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'sent');
                    messageDiv.innerHTML = `
                        <div class="message-content">
                            <div class="file-preview" onclick="downloadFile('${fileName}')" style="cursor: pointer; background-color: rgba(255,255,255,0.1); padding: 0.75rem; border-radius: 8px; display: flex; align-items: center;">
                                <i class="${fileIcon} file-icon" style="font-size: 2rem; margin-right: 0.75rem; color: #fff;"></i>
                                <div class="file-info">
                                    <div class="file-name" style="font-weight: 600; color: #fff;">${fileName}</div>
                                    <div class="file-size" style="font-size: 0.75rem; color: rgba(255,255,255,0.8);">${fileSize}</div>
                                </div>
                            </div>
                        </div>
                        <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                    `;
                    chatMessages.appendChild(messageDiv);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                } else {
                    alert('Please select a user to send the file to.');
                }
                e.target.value = '';
            }
        });
        
        document.getElementById('videoInput').addEventListener('change', (e) => {
            if (e.target.files[0]) {
                if (currentUser) {
                    const file = e.target.files[0];
                    const fileName = file.name;
                    const fileSize = formatFileSize(file.size);
                    const chatMessages = document.getElementById('chatMessages');
                    
                    // Create video URL for preview
                    const videoUrl = URL.createObjectURL(file);
                    
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'sent');
                    messageDiv.innerHTML = `
                        <div class="message-content">
                            <div class="media-preview">
                                <video controls style="max-width: 250px; border-radius: 8px;">
                                    <source src="${videoUrl}" type="${file.type}">
                                    Your browser does not support the video tag.
                                </video>
                                <div style="font-size: 0.8rem; margin-top: 0.25rem; color: rgba(255,255,255,0.8);">${fileName} (${fileSize})</div>
                            </div>
                        </div>
                        <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                    `;
                    chatMessages.appendChild(messageDiv);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                } else {
                    alert('Please select a user to send the video to.');
                }
                e.target.value = '';
            }
        });
        
        // Helper function to format file size
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
        
        // Helper function to open image in modal (placeholder)
        function openImageModal(imageUrl, fileName) {
            // Create a simple modal to view image
            const modal = document.createElement('div');
            modal.style.cssText = `
                position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                background-color: rgba(0,0,0,0.9); z-index: 3000; 
                display: flex; align-items: center; justify-content: center;
                cursor: pointer;
            `;
            modal.innerHTML = `
                <div style="max-width: 90%; max-height: 90%; text-align: center;">
                    <img src="${imageUrl}" style="max-width: 100%; max-height: 100%; border-radius: 8px;">
                    <div style="color: white; margin-top: 10px;">${fileName}</div>
                </div>
            `;
            modal.onclick = () => document.body.removeChild(modal);
            document.body.appendChild(modal);
        }
        
        // Helper function for file download (placeholder)
        function downloadFile(fileName) {
            alert(`Download functionality for ${fileName} would be implemented here.`);
        }
        
        let isRecording = false;
        let mediaRecorder = null;
        let recordedChunks = [];
        let localStream = null;
        let currentCall = null;
        let isMuted = false;
        let isVideoEnabled = false;
        let recordingStartTime = 0;
        
        // Real audio/video call functions
        async function startAudioCall() {
            if (!currentUser) {
                alert('Please select a user to call first.');
                return;
            }
            
            try {
                localStream = await navigator.mediaDevices.getUserMedia({ 
                    audio: true, 
                    video: false 
                });
                
                showCallInterface('Audio Call', false);
                document.getElementById('callStatus').textContent = `Calling ${currentUser}...`;
                
                // Simulate connection delay
                setTimeout(() => {
                    document.getElementById('callStatus').textContent = `Connected to ${currentUser}`;
                }, 2000);
                
            } catch (error) {
                console.error('Error accessing audio:', error);
                alert('Could not access microphone. Please check your permissions.');
            }
        }
        
        async function startVideoCall() {
            if (!currentUser) {
                alert('Please select a user to call first.');
                return;
            }
            
            try {
                localStream = await navigator.mediaDevices.getUserMedia({ 
                    audio: true, 
                    video: true 
                });
                
                showCallInterface('Video Call', true);
                document.getElementById('callStatus').textContent = `Calling ${currentUser}...`;
                document.getElementById('localVideo').srcObject = localStream;
                
                // Simulate connection delay
                setTimeout(() => {
                    document.getElementById('callStatus').textContent = `Connected to ${currentUser}`;
                }, 2000);
                
            } catch (error) {
                console.error('Error accessing camera/microphone:', error);
                alert('Could not access camera or microphone. Please check your permissions.');
            }
        }
        
        function showCallInterface(title, isVideo) {
            document.getElementById('callTitle').textContent = title;
            document.getElementById('callOverlay').classList.add('show');
            document.getElementById('callInterface').classList.add('show');
            
            const videoBtn = document.getElementById('videoBtn');
            const localVideo = document.getElementById('localVideo');
            const remoteVideo = document.getElementById('remoteVideo');
            
            if (isVideo) {
                videoBtn.style.display = 'block';
                localVideo.style.display = 'block';
                remoteVideo.style.display = 'block';
                isVideoEnabled = true;
            } else {
                videoBtn.style.display = 'none';
                localVideo.style.display = 'none';
                remoteVideo.style.display = 'none';
                isVideoEnabled = false;
            }
            
            currentCall = { isVideo, stream: localStream };
        }
        
        function endCall() {
            if (localStream) {
                localStream.getTracks().forEach(track => track.stop());
                localStream = null;
            }
            
            document.getElementById('callOverlay').classList.remove('show');
            document.getElementById('callInterface').classList.remove('show');
            document.getElementById('localVideo').srcObject = null;
            document.getElementById('remoteVideo').srcObject = null;
            
            currentCall = null;
            isMuted = false;
            isVideoEnabled = false;
            
            // Reset button states
            const muteBtn = document.getElementById('muteBtn');
            muteBtn.innerHTML = '<i class="fas fa-microphone"></i>';
            muteBtn.style.backgroundColor = '#6c757d';
            
            const videoBtn = document.getElementById('videoBtn');
            videoBtn.innerHTML = '<i class="fas fa-video"></i>';
            videoBtn.style.backgroundColor = '#3498DB';
        }
        
        function toggleMute() {
            if (localStream) {
                const audioTracks = localStream.getAudioTracks();
                audioTracks.forEach(track => {
                    track.enabled = !track.enabled;
                });
                
                isMuted = !isMuted;
                const muteBtn = document.getElementById('muteBtn');
                
                if (isMuted) {
                    muteBtn.innerHTML = '<i class="fas fa-microphone-slash"></i>';
                    muteBtn.style.backgroundColor = '#dc3545';
                } else {
                    muteBtn.innerHTML = '<i class="fas fa-microphone"></i>';
                    muteBtn.style.backgroundColor = '#6c757d';
                }
            }
        }
        
        function toggleVideo() {
            if (localStream && currentCall && currentCall.isVideo) {
                const videoTracks = localStream.getVideoTracks();
                videoTracks.forEach(track => {
                    track.enabled = !track.enabled;
                });
                
                isVideoEnabled = !isVideoEnabled;
                const videoBtn = document.getElementById('videoBtn');
                
                if (isVideoEnabled) {
                    videoBtn.innerHTML = '<i class="fas fa-video"></i>';
                    videoBtn.style.backgroundColor = '#3498DB';
                } else {
                    videoBtn.innerHTML = '<i class="fas fa-video-slash"></i>';
                    videoBtn.style.backgroundColor = '#dc3545';
                }
            }
        }
        
        // Real voice recording
        document.getElementById('voiceRecord').addEventListener('click', async () => {
            const voiceBtn = document.getElementById('voiceRecord');
            
            if (!currentUser) {
                alert('Please select a user to send a voice message to.');
                return;
            }
            
            if (!isRecording) {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    
                    mediaRecorder = new MediaRecorder(stream);
                    recordedChunks = [];
                    
                    mediaRecorder.ondataavailable = (e) => {
                        if (e.data.size > 0) {
                            recordedChunks.push(e.data);
                        }
                    };
                    
                    mediaRecorder.onstop = () => {
                        const audioBlob = new Blob(recordedChunks, { type: 'audio/webm' });
                        const audioUrl = URL.createObjectURL(audioBlob);
                        
                        // Calculate recording duration (approximate)
                        const recordingDuration = Math.round((Date.now() - recordingStartTime) / 1000);
                        
                        // Add voice message to chat
                        const chatMessages = document.getElementById('chatMessages');
                        chatMessages.classList.remove('empty');
                        
                        const messageDiv = document.createElement('div');
                        messageDiv.classList.add('message', 'sent');
                        messageDiv.innerHTML = `
                            <div class="message-content">
                                <div style="display: flex; align-items: center; gap: 0.75rem; min-width: 200px;">
                                    <i class="fas fa-microphone" style="color: #fff; font-size: 1.1rem;"></i>
                                    <div style="flex: 1;">
                                        <audio controls style="width: 100%; max-width: 220px; height: 35px;" preload="metadata">
                                            <source src="${audioUrl}" type="audio/webm">
                                            <source src="${audioUrl}" type="audio/ogg">
                                            <source src="${audioUrl}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                        <div style="font-size: 0.7rem; color: rgba(255,255,255,0.8); margin-top: 2px;">
                                            Voice message (${recordingDuration}s)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                        `;
                        chatMessages.appendChild(messageDiv);
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                        
                        // Store the audio URL reference to prevent garbage collection
                        if (!window.audioUrls) window.audioUrls = [];
                        window.audioUrls.push(audioUrl);
                        
                        // Stop all tracks
                        stream.getTracks().forEach(track => track.stop());
                        
                        // Optional: Add auto-reply for demo (you can remove this if not needed)
                        setTimeout(() => {
                            const replyDiv = document.createElement('div');
                            replyDiv.classList.add('message', 'received');
                            replyDiv.innerHTML = `
                                <div class="message-content">Nice voice message! I heard you clearly.</div>
                                <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                            `;
                            chatMessages.appendChild(replyDiv);
                            chatMessages.scrollTop = chatMessages.scrollHeight;
                        }, 2000);
                    };
                    
                    mediaRecorder.start();
                    recordingStartTime = Date.now();
                    isRecording = true;
                    voiceBtn.classList.add('recording');
                    voiceBtn.title = 'Stop Recording';
                    
                } catch (error) {
                    console.error('Error accessing microphone:', error);
                    alert('Could not access microphone. Please check your permissions.');
                }
            } else {
                // Stop recording
                mediaRecorder.stop();
                isRecording = false;
                voiceBtn.classList.remove('recording');
                voiceBtn.title = 'Voice Message';
            }
        });
        
        // Call control event listeners
        document.getElementById('muteBtn').addEventListener('click', toggleMute);
        document.getElementById('videoBtn').addEventListener('click', toggleVideo);
        document.getElementById('endCallBtn').addEventListener('click', endCall);
        
        // Close messages dropdown when clicking outside
        document.addEventListener('click', (e) => {
            const dropdown = document.getElementById('messagesDropdown');
            const messageIcon = document.getElementById('messageIcon');
            
            if (!messageIcon.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.remove('show');
            }
        });
        
        // Chat Tab Functions
        function switchToTab(tabId) {
            // Remove active class from all tabs and tab contents
            document.querySelectorAll('.tab-item').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.chat-tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Add active class to selected tab and its content
            const selectedTab = document.getElementById(`${tabId}Tab`);
            const selectedContent = document.getElementById(`${tabId}TabContent`);
            
            if (selectedTab && selectedContent) {
                selectedTab.classList.add('active');
                selectedContent.classList.add('active');
                currentActiveTab = tabId;
                
                // Update current user based on tab
                if (tabId !== 'welcome') {
                    currentUser = tabId;
                } else {
                    currentUser = null;
                }
                
                // Remove unread indicator when switching to tab
                selectedTab.classList.remove('has-unread');
            }
        }
        
        function createChatTab(username) {
            // Check if tab already exists
            const existingTab = document.getElementById(`${username}Tab`);
            if (existingTab) {
                switchToTab(username);
                return;
            }
            
            // Create new tab
            const tabsContainer = document.getElementById('chatTabs');
            const chatArea = document.querySelector('.chat-area');
            
            // Create tab element
            const newTab = document.createElement('div');
            newTab.className = 'tab-item';
            newTab.id = `${username}Tab`;
            newTab.onclick = () => switchToTab(username);
            newTab.innerHTML = `
                <span class="tab-title">${username}</span>
                <span class="tab-close" onclick="event.stopPropagation(); closeChatTab('${username}')">
                    <i class="fas fa-times"></i>
                </span>
                <div class="tab-unread-indicator"></div>
            `;
            
            // Add tab to container
            tabsContainer.appendChild(newTab);
            
            // Create tab content
            const newTabContent = document.createElement('div');
            newTabContent.className = 'chat-tab-content';
            newTabContent.id = `${username}TabContent`;
            
            // Get user gender for icon styling
            const userGender = getUserGender(username);
            const userIconClass = userGender === 'female' ? 'user-icon-female' : 'user-icon-male';
            
            newTabContent.innerHTML = `
                <div class="chat-header">
                    <div>
                        <i class="fas fa-user ${userIconClass}" style="margin-right: 0.5rem;"></i>
                        <span id="chatTitle_${username}">Chat with ${username}</span>
                    </div>
                    <div class="call-buttons">
                        <button class="btn btn-success" onclick="startAudioCall('${username}')" title="Audio Call">
                            <i class="fas fa-phone"></i>
                        </button>
                        <button class="btn btn-info" onclick="startVideoCall('${username}')" title="Video Call">
                            <i class="fas fa-video"></i>
                        </button>
                    </div>
                </div>
                
                <div class="chat-messages" id="chatMessages_${username}">
                    <div class="message received">
                        <div class="message-content">Hello! I'm ${username}. Nice to meet you!</div>
                        <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                    </div>
                </div>
                
                <div class="chat-input">
                    <form onsubmit="sendMessageToTab(event, '${username}')" aria-label="Chat Input Form">
                        <div class="media-buttons">
                            <label title="Send Image">
                                <i class="fas fa-image"></i>
                                <input type="file" accept="image/*" onchange="handleImageUpload(event, '${username}')">
                            </label>
                            <label title="Send File">
                                <i class="fas fa-file"></i>
                                <input type="file" onchange="handleFileUpload(event, '${username}')">
                            </label>
                            <label title="Send Video">
                                <i class="fas fa-video"></i>
                                <input type="file" accept="video/*" onchange="handleVideoUpload(event, '${username}')">
                            </label>
                            <button type="button" class="voice-record-btn" onclick="handleVoiceRecord('${username}')" style="font-size: 1.2rem; padding: 0; margin: 0 0.3rem;" title="Voice Message">
                                <i class="fas fa-microphone"></i>
                            </button>
                        </div>
                        <input type="text" id="messageInput_${username}" placeholder="Type your message..." autocomplete="off">
                        <button type="submit" class="btn">Send</button>
                    </form>
                </div>
            `;
            
            // Add content to chat area
            chatArea.appendChild(newTabContent);
            
            // Store chat data
            activeChats[username] = {
                messages: [],
                unreadCount: 0
            };
            
            // Switch to the new tab
            switchToTab(username);
        }
        
        function closeChatTab(username) {
            const tab = document.getElementById(`${username}Tab`);
            const tabContent = document.getElementById(`${username}TabContent`);
            
            if (tab && tabContent) {
                // Remove tab and content from DOM
                tab.remove();
                tabContent.remove();
                
                // Remove from active chats
                delete activeChats[username];
                
                // If this was the active tab, switch to welcome tab
                if (currentActiveTab === username) {
                    switchToTab('welcome');
                }
            }
        }
        
        function sendMessageToTab(event, username) {
            event.preventDefault();
            const messageInput = document.getElementById(`messageInput_${username}`);
            const messageText = messageInput.value.trim();
            
            if (messageText) {
                const chatMessages = document.getElementById(`chatMessages_${username}`);
                
                // Add sent message
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message', 'sent');
                messageDiv.innerHTML = `
                    <div class="message-content">${messageText}</div>
                    <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                `;
                chatMessages.appendChild(messageDiv);
                messageInput.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;
                
                // Store message in active chats
                if (!activeChats[username]) {
                    activeChats[username] = { messages: [], unreadCount: 0 };
                }
                activeChats[username].messages.push({
                    type: 'sent',
                    content: messageText,
                    timestamp: new Date()
                });
                
                // Demo auto-reply after 2 seconds
                setTimeout(() => {
                    const replies = [
                        "That's interesting! Tell me more.",
                        "I completely agree with you.",
                        "Thanks for sharing that with me.",
                        "How was your day today?",
                        "I'm glad to hear from you!",
                        "What do you think about that?"
                    ];
                    const randomReply = replies[Math.floor(Math.random() * replies.length)];
                    
                    const replyDiv = document.createElement('div');
                    replyDiv.classList.add('message', 'received');
                    replyDiv.innerHTML = `
                        <div class="message-content">${randomReply}</div>
                        <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                    `;
                    chatMessages.appendChild(replyDiv);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                    
                    // Store received message
                    activeChats[username].messages.push({
                        type: 'received',
                        content: randomReply,
                        timestamp: new Date()
                    });
                    
                    // Show unread indicator if not on this tab
                    if (currentActiveTab !== username) {
                        const tab = document.getElementById(`${username}Tab`);
                        if (tab) {
                            tab.classList.add('has-unread');
                        }
                    }
                    
                    // Update unread count
                    unreadCount++;
                    document.getElementById('messageCount').textContent = unreadCount;
                }, 2000);
            }
        }
        
        function getUserGender(username) {
            // Simple gender detection based on names (for demo purposes)
            const femaleNames = ['Sarah', 'Andrea', 'Ashley', 'Beth'];
            return femaleNames.includes(username) ? 'female' : 'male';
        }
        
        // Media upload handlers for tabbed interface
        function handleImageUpload(event, username) {
            const file = event.target.files[0];
            if (file) {
                const fileName = file.name;
                const fileSize = formatFileSize(file.size);
                const chatMessages = document.getElementById(`chatMessages_${username}`);
                const imageUrl = URL.createObjectURL(file);
                
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message', 'sent');
                messageDiv.innerHTML = `
                    <div class="message-content">
                        <div class="media-preview">
                            <img src="${imageUrl}" alt="${fileName}" onclick="openImageModal('${imageUrl}', '${fileName}')" style="cursor: pointer; max-width: 200px; border-radius: 8px;">
                            <div style="font-size: 0.8rem; margin-top: 0.25rem; color: rgba(255,255,255,0.8);">${fileName} (${fileSize})</div>
                        </div>
                    </div>
                    <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                `;
                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                event.target.value = '';
            }
        }
        
        function handleFileUpload(event, username) {
            const file = event.target.files[0];
            if (file) {
                const fileName = file.name;
                const fileSize = formatFileSize(file.size);
                const fileExtension = fileName.split('.').pop().toLowerCase();
                const chatMessages = document.getElementById(`chatMessages_${username}`);
                
                let fileIcon = 'fas fa-file';
                if (['pdf'].includes(fileExtension)) fileIcon = 'fas fa-file-pdf';
                else if (['doc', 'docx'].includes(fileExtension)) fileIcon = 'fas fa-file-word';
                else if (['txt'].includes(fileExtension)) fileIcon = 'fas fa-file-alt';
                
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message', 'sent');
                messageDiv.innerHTML = `
                    <div class="message-content">
                        <div class="file-preview" onclick="downloadFile('${fileName}')" style="cursor: pointer; background-color: rgba(255,255,255,0.1); padding: 0.75rem; border-radius: 8px; display: flex; align-items: center;">
                            <i class="${fileIcon} file-icon" style="font-size: 2rem; margin-right: 0.75rem; color: #fff;"></i>
                            <div class="file-info">
                                <div class="file-name" style="font-weight: 600; color: #fff;">${fileName}</div>
                                <div class="file-size" style="font-size: 0.75rem; color: rgba(255,255,255,0.8);">${fileSize}</div>
                            </div>
                        </div>
                    </div>
                    <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                `;
                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                event.target.value = '';
            }
        }
        
        function handleVideoUpload(event, username) {
            const file = event.target.files[0];
            if (file) {
                const fileName = file.name;
                const fileSize = formatFileSize(file.size);
                const chatMessages = document.getElementById(`chatMessages_${username}`);
                const videoUrl = URL.createObjectURL(file);
                
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message', 'sent');
                messageDiv.innerHTML = `
                    <div class="message-content">
                        <div class="media-preview">
                            <video controls style="max-width: 250px; border-radius: 8px;">
                                <source src="${videoUrl}" type="${file.type}">
                                Your browser does not support the video tag.
                            </video>
                            <div style="font-size: 0.8rem; margin-top: 0.25rem; color: rgba(255,255,255,0.8);">${fileName} (${fileSize})</div>
                        </div>
                    </div>
                    <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                `;
                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                event.target.value = '';
            }
        }
        
        async function handleVoiceRecord(username) {
            const voiceBtn = event.target;
            
            if (!isRecording) {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    
                    mediaRecorder = new MediaRecorder(stream);
                    recordedChunks = [];
                    
                    mediaRecorder.ondataavailable = (e) => {
                        if (e.data.size > 0) {
                            recordedChunks.push(e.data);
                        }
                    };
                    
                    mediaRecorder.onstop = () => {
                        const audioBlob = new Blob(recordedChunks, { type: 'audio/webm' });
                        const audioUrl = URL.createObjectURL(audioBlob);
                        const recordingDuration = Math.round((Date.now() - recordingStartTime) / 1000);
                        
                        const chatMessages = document.getElementById(`chatMessages_${username}`);
                        const messageDiv = document.createElement('div');
                        messageDiv.classList.add('message', 'sent');
                        messageDiv.innerHTML = `
                            <div class="message-content">
                                <div style="display: flex; align-items: center; gap: 0.75rem; min-width: 200px;">
                                    <i class="fas fa-microphone" style="color: #fff; font-size: 1.1rem;"></i>
                                    <div style="flex: 1;">
                                        <audio controls style="width: 100%; max-width: 220px; height: 35px;" preload="metadata">
                                            <source src="${audioUrl}" type="audio/webm">
                                            <source src="${audioUrl}" type="audio/ogg">
                                            <source src="${audioUrl}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                        <div style="font-size: 0.7rem; color: rgba(255,255,255,0.8); margin-top: 2px;">
                                            Voice message (${recordingDuration}s)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                        `;
                        chatMessages.appendChild(messageDiv);
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                        
                        if (!window.audioUrls) window.audioUrls = [];
                        window.audioUrls.push(audioUrl);
                        
                        stream.getTracks().forEach(track => track.stop());
                    };
                    
                    mediaRecorder.start();
                    recordingStartTime = Date.now();
                    isRecording = true;
                    voiceBtn.classList.add('recording');
                    voiceBtn.title = 'Stop Recording';
                    
                } catch (error) {
                    console.error('Error accessing microphone:', error);
                    alert('Could not access microphone. Please check your permissions.');
                }
            } else {
                mediaRecorder.stop();
                isRecording = false;
                voiceBtn.classList.remove('recording');
                voiceBtn.title = 'Voice Message';
            }
        }
        
        // Demo notification simulation
        setInterval(() => {
            if (Math.random() > 0.98) { // Small chance every interval
                unreadCount++;
                document.getElementById('messageCount').textContent = unreadCount;
            }
        }, 10000); // Check every 10 seconds
    </script>
</body>
</html>
