<?php

$current_page = 'hobby';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas</title>
    <link rel="stylesheet" href="hobby.css">
</head>
<body class="wrapper">
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php">Komunitas</a>
            </div>
            <nav>
                <ul>
                    <li class="<?php echo ($current_page == 'hp') ? 'active' : ''; ?>">
                        <a href="hp.php">JadiSigma</a>
                    <li class="<?php echo ($current_page == 'Tampilan') ? 'active' : ''; ?>">
                         <a href="look.php">Tampilan</a>
                    <li class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">
                        <a href="about.php">About Us</a>
                    </li>
                    <li class="<?php echo ($current_page == 'work') ? 'active' : ''; ?>">
                        <a href="hobby.php">Komunitas</a>
                    </li>
                    <li class="<?php echo ($current_page == 'info') ? 'active' : ''; ?>">
                        <a href="media.php">Sosial Media</a>
                    </li>
                    <li class="<?php echo ($current_page == 'tutorial') ? 'active' : ''; ?>">
                            <a href="tutorial.php">Tutorial</a>
                    </li>
                    <li class="<?php echo ($current_page == 'login') ? 'active' : ''; ?>">
                        <a href="masuk/login.php">Login</a>
                    </li>
                    <li class="<?php echo ($current_page == 'register') ? 'active' : ''; ?>">
                        <a href="masuk/register.php">Register</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    </head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <h2>Chat Room</h2>
            <div class="online-status">
                <div class="status-dot"></div>
                Online
            </div>
        </div>
        
        <div class="chat-messages" id="chatMessages">
            <!-- Sample messages -->
            <div class="message received">
                <div class="message-bubble">
                    Halo! Selamat datang di chat room
                    <div class="message-time">10:30</div>
                </div>
            </div>
            <div class="message sent">
                <div class="message-bubble">
                    Halo juga! Terima kasih 😊
                    <div class="message-time">10:31</div>
                </div>
            </div>
            <div class="message received">
                <div class="message-bubble">
                    Bagaimana kabarmu hari ini?
                    <div class="message-time">10:32</div>
                </div>
            </div>
            
            <!-- Typing indicator -->
            <div class="typing-indicator" id="typingIndicator">
                <div class="typing-dots">
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                </div>
            </div>
        </div>
        
        <div class="chat-input">
            <div class="input-container">
                <input type="text" id="messageInput" placeholder="Ketik pesan..." maxlength="500">
                <button id="sendButton">Kirim</button>
            </div>
        </div>
    </div>

    <script>
        // Chat functionality
        const chatMessages = document.getElementById('chatMessages');
        const messageInput = document.getElementById('messageInput');
        const sendButton = document.getElementById('sendButton');
        const typingIndicator = document.getElementById('typingIndicator');

        // Array untuk menyimpan pesan (dalam aplikasi nyata, ini akan disimpan di database)
        let messages = [];

        // Auto-responses untuk simulasi chat bot
        const autoResponses = [
            "Itu menarik! Ceritakan lebih lanjut",
            "Saya mengerti maksudmu",
            "Wah, keren sekali!",
            "Bagaimana menurutmu tentang hal itu?",
            "Saya setuju dengan pendapatmu",
            "Terima kasih sudah berbagi!",
            "Itu ide yang bagus",
            "Saya juga berpikir begitu"
        ];

        function getCurrentTime() {
            const now = new Date();
            return now.getHours().toString().padStart(2, '0') + ':' + 
                   now.getMinutes().toString().padStart(2, '0');
        }

        function addMessage(text, type = 'sent') {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${type}`;
            
            const bubbleDiv = document.createElement('div');
            bubbleDiv.className = 'message-bubble';
            
            const timeDiv = document.createElement('div');
            timeDiv.className = 'message-time';
            timeDiv.textContent = getCurrentTime();
            
            bubbleDiv.innerHTML = text;
            bubbleDiv.appendChild(timeDiv);
            messageDiv.appendChild(bubbleDiv);
            
            // Insert before typing indicator
            chatMessages.insertBefore(messageDiv, typingIndicator);
            
            // Scroll to bottom
            chatMessages.scrollTop = chatMessages.scrollHeight;
            
            // Store message
            messages.push({
                text: text,
                type: type,
                time: getCurrentTime()
            });
        }

        function showTypingIndicator() {
            typingIndicator.style.display = 'block';
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function hideTypingIndicator() {
            typingIndicator.style.display = 'none';
        }

        function sendMessage() {
            const text = messageInput.value.trim();
            if (text === '') return;
            
            // Add user message
            addMessage(text, 'sent');
            messageInput.value = '';
            
            // Show typing indicator
            showTypingIndicator();
            
            // Simulate auto-response after delay
            setTimeout(() => {
                hideTypingIndicator();
                const randomResponse = autoResponses[Math.floor(Math.random() * autoResponses.length)];
                addMessage(randomResponse, 'received');
            }, 1000 + Math.random() * 2000); // Random delay between 1-3 seconds
        }

        // Event listeners
        sendButton.addEventListener('click', sendMessage);

        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Auto-focus on input
        messageInput.focus();

        // Simulate initial scroll
        setTimeout(() => {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }, 100);
    </script>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Kelompok Kita</p>
        </div>
    </footer>
</body>
</html>