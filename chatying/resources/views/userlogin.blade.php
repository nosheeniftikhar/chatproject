@extends('layouts.chat')

@section('title', 'Chatying - Free Online Chat Room')
@section('description', 'Join Chatying\'s free online chat room to connect with authentic users worldwide. Chat, share media, and meet new people securely.')
@section('keywords', 'online chat, free chat room, Chatying, social chat, meet new people, chat online, media sharing')
@section('canonical', route('chat.room'))

@section('page-styles')
        :root {
            --primary: #2C3E50; /* Soft navy blue */
            --secondary: #3498DB; /* Vibrant blue for accents */
            --background: #F4F7FA; /* Light background */
            --white: #FFFFFF;
            --text: #34495E; /* Darker text for readability */
            --accent: #E74C3C; /* Red accent for buttons */
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
        
        .navbar-nav .nav-link {
            color: var(--white) !important;
            margin: 0 15px;
            font-weight: 500;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover {
            color: var(--accent) !important;
            transform: translateY(-2px);
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
            align-items: center;
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
        
        .ad-space {
            height: 100px;
            background-color: #E8ECEF;
            border: 1px solid #dee2e6;
            margin: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6B7280;
        }
        
        .modal-content {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        
        .modal-body {
            padding: 2rem;
            text-align: center;
        }
        
        .regonly {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }
        
        .vipImageList {
            list-style: none;
            padding: 0;
        }
        
        .vipImageList li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: var(--text);
        }
        
        .modal_list {
            margin-right: 0.75rem;
            color: var(--secondary);
        }
        
        .age_modal_actions {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }
        
        .confirm_decline {
            margin: 0 0.75rem;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
        }
        
        .confirm_decline.agree {
            background-color: var(--accent);
            border-color: var(--accent);
            color: var(--white);
        }
        
        .confirm_decline.disagree {
            background-color: #7F8C8D;
            border-color: #7F8C8D;
            color: var(--white);
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
        }
@endsection

@section('content')
    <!-- Main Content -->
    <main>
        <div class="chat-container">
            <!-- Sidebar: Online Users -->
            <section class="sidebar" aria-label="Online Users">
                <h3>Online Users</h3>
                <ul class="user-list" id="userList">
                    <li>
                        <span class="status-dot" aria-label="Online"></span>
                        <i class="fas fa-user" style="margin-right:6px;color:#3498DB;"></i>
                        Demo User
                    </li>
                </ul>
            </section>
            
            <!-- Chat Area -->
            <section class="chat-area" aria-label="Chat Window">
                <div class="chat-header" id="chatHeader">
                    <h3 id="chatTitle">Welcome to Chatying</h3>
                    <div class="call-buttons">
                        <button class="btn btn-success" onclick="startAudioCall()"><i class="fas fa-phone"></i></button>
                        <button class="btn btn-info" onclick="startVideoCall()"><i class="fas fa-video"></i></button>
                    </div>
                </div>
                
                <div class="chat-messages empty" id="chatMessages" aria-live="polite">
                    <p>Welcome to Chatying! This is a demo interface. In a real implementation, you would see live chat messages here.</p>
                    <p>Select a user from the sidebar to begin a conversation.</p>
                </div>
                
                <div class="chat-input" id="chatInput">
                    <form id="chatForm" onsubmit="sendMessage(event)" aria-label="Chat Input Form">
                        <div class="media-buttons">
                            <label for="imageInput" title="Send Image" aria-label="Upload Image"><i class="fas fa-image"></i></label>
                            <input type="file" id="imageInput" accept="image/*" aria-hidden="true">
                            <label for="fileInput" title="Send File" aria-label="Upload File"><i class="fas fa-file"></i></label>
                            <input type="file" id="fileInput" accept=".pdf,.doc,.docx,.txt" aria-hidden="true">
                            <label for="videoInput" title="Send Video" aria-label="Upload Video"><i class="fas fa-video"></i></label>
                            <input type="file" id="videoInput" accept="video/*" aria-hidden="true">
                            <button type="button" id="voiceRecord" class="btn btn-link" style="color: var(--primary); font-size: 1.2rem;" aria-label="Record Voice Note"><i class="fas fa-microphone"></i></button>
                        </div>
                        <input type="text" id="messageInput" placeholder="Type a message..." required aria-label="Type your message">
                        <button type="submit" class="btn btn-primary" aria-label="Send Message">Send</button>
                    </form>
                </div>
            </section>
        </div>

        <!-- Ad Space -->
        <div class="ad-space" aria-hidden="true">Advertisement Space</div>
    </main>
@endsection

@section('scripts')
    <script>
        // Demo function for sending messages
        function sendMessage(event) {
            event.preventDefault();
            const messageInput = document.getElementById('messageInput');
            const messageText = messageInput.value.trim();
            if (messageText) {
                const chatMessages = document.getElementById('chatMessages');
                chatMessages.classList.remove('empty');
                
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
                    const replyDiv = document.createElement('div');
                    replyDiv.classList.add('message', 'received');
                    replyDiv.innerHTML = `
                        <div class="message-content">Thanks for your message! This is a demo response.</div>
                        <div class="message-time">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })}</div>
                    `;
                    chatMessages.appendChild(replyDiv);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 2000);
            }
        }
        
        function startAudioCall() {
            alert('Audio call feature - This is a demo interface. In a real implementation, this would initiate an audio call.');
        }
        
        function startVideoCall() {
            alert('Video call feature - This is a demo interface. In a real implementation, this would initiate a video call.');
        }
        
        function logout() {
            window.location.href = '{{ route("home") }}';
        }
        
        // Handle media uploads (demo)
        document.getElementById('imageInput').addEventListener('change', (e) => {
            if (e.target.files[0]) {
                alert('Image upload - This is a demo. File: ' + e.target.files[0].name);
                e.target.value = '';
            }
        });
        
        document.getElementById('fileInput').addEventListener('change', (e) => {
            if (e.target.files[0]) {
                alert('File upload - This is a demo. File: ' + e.target.files[0].name);
                e.target.value = '';
            }
        });
        
        document.getElementById('videoInput').addEventListener('change', (e) => {
            if (e.target.files[0]) {
                alert('Video upload - This is a demo. File: ' + e.target.files[0].name);
                e.target.value = '';
            }
        });
        
        document.getElementById('voiceRecord').addEventListener('click', () => {
            alert('Voice recording - This is a demo. In a real implementation, this would record and send voice messages.');
        });
    </script>
@endsection
