// Toggle the live chat box
document.querySelector('.livechat-toggle').addEventListener('click', function() {
    const chatBox = document.querySelector('.livechat-box');
    chatBox.classList.toggle('active');
});

// Send a chat message
document.querySelector('.chat-footer button').addEventListener('click', function() {
    const userMessage = document.querySelector('.chat-footer textarea').value;
    if (userMessage.trim()) {
        const chatBody = document.querySelector('.chat-body');
        const newMessage = document.createElement('p');
        newMessage.textContent = "You: " + userMessage;
        chatBody.appendChild(newMessage);
        document.querySelector('.chat-footer textarea').value = ""; // Clear input
        chatBody.scrollTop = chatBody.scrollHeight; // Scroll to the latest message
    }
});
