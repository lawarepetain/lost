// Exemple de données (à remplacer par des données réelles)
const conversations = [
    { id: 1, name: 'Utilisateur 1' },
    { id: 2, name: 'Utilisateur 2' },
  ];
  
  const messages = [
    { senderId: 1, content: 'Bonjour !', timestamp: '2023-10-27 10:00:00' },
    { senderId: 2, content: 'Salut !', timestamp: '2023-10-27 10:01:00' },
    { senderId: 1, content: 'Comment ça va ?', timestamp: '2023-10-27 10:02:00' },
  ];
  
  // Afficher les conversations
  const conversationList = document.getElementById('conversation-list');
  conversations.forEach((conversation) => {
    const li = document.createElement('li');
    li.textContent = conversation.name;
    li.addEventListener('click', () => {
      // Charger les messages de la conversation
      loadMessages(conversation.id);
    });
    conversationList.appendChild(li);
  });
  
  // Charger les messages
  function loadMessages(conversationId) {
    const messageArea = document.getElementById('message-area');
    messageArea.innerHTML = ''; // Effacer les messages précédents
  
    messages.forEach((message) => {
      const messageElement = document.createElement('div');
      messageElement.classList.add('message');
      messageElement.classList.add(message.senderId === 1 ? 'sender' : 'receiver');
      messageElement.textContent = message.content;
      messageArea.appendChild(messageElement);
    });
  }
  
  // Envoyer un message
  const sendMessageButton = document.getElementById('send-message');
  sendMessageButton.addEventListener('click', () => {
    const messageContent = document.getElementById('message-content').value;
    // Envoyer le message à l'API
    // ...
    // Ajouter le message à l'affichage
    const messageElement = document.createElement('div');
    messageElement.classList.add('message');
    messageElement.classList.add('sender');
    messageElement.textContent = messageContent;
    document.getElementById('message-area').appendChild(messageElement);
    document.getElementById('message-content').value = ''; // Effacer le champ de saisie
  });
  