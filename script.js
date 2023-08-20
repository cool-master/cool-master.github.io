// This is the chat application.

// Initialize the chat box.
const chatBox = document.querySelector('.chat-box');

// Initialize the input box.
const inputBox = document.querySelector('.input-box');

// Initialize the input field.
const inputField = inputBox.querySelector('input');

// Initialize the send button.
const sendButton = inputBox.querySelector('button');

// When the send button is clicked, send the message.
sendButton.addEventListener('click', () => {
    // Get the message from the input field.
    const message = inputField.value;

    // Add the message to the chat box.
    const messageElement = document.createElement('li');
    messageElement.className = message.user === 'me' ? 'message me' : 'message you';
    messageElement.textContent = message;
    chatBox.appendChild(messageElement);

    // Clear the input field.
    inputField.value = '';
});
