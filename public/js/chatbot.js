function showLoadingMessage() {
    const loadingMessage = document.createElement('div');
    loadingMessage.classList.add('message', 'loading', 'fade-in');
    loadingMessage.textContent = 'Carregando';
    return loadingMessage;
}

function disableButtons(disable) {
    const buttons = document.querySelectorAll('.buttons button');
    buttons.forEach(button => {
        button.disabled = disable;
    });
}

function addMessageTemperatura() {
    const messageContainer = document.getElementById('message-container');

    disableButtons(true);  // Desabilitar botões

    const sentMessage = document.createElement('div');
    sentMessage.classList.add('message', 'sent', 'fade-in');
    sentMessage.textContent = 'Qual é a temperatura?';
    messageContainer.appendChild(sentMessage);
    messageContainer.scrollTop = messageContainer.scrollHeight;

    const loadingMessage = showLoadingMessage();
    messageContainer.appendChild(loadingMessage);

    setTimeout(() => {
        const temperaturaX = Math.floor(Math.random() * 35);
        const temperaturaY = Math.floor(Math.random() * 35);

        const receivedMessage = document.createElement('div');
        receivedMessage.classList.add('message', 'received', 'fade-in');
        receivedMessage.textContent = `A temperatura atual é ${temperaturaX}°C / ${temperaturaY}°C`;

        messageContainer.replaceChild(receivedMessage, loadingMessage);
        messageContainer.scrollTop = messageContainer.scrollHeight;

        disableButtons(false);  // Reabilitar botões
    }, 2000);
}

function addMessageUmidade() {
    const messageContainer = document.getElementById('message-container');

    disableButtons(true);  // Desabilitar botões

    const sentMessage = document.createElement('div');
    sentMessage.classList.add('message', 'sent', 'fade-in');
    sentMessage.textContent = 'Qual é a umidade?';
    messageContainer.appendChild(sentMessage);
    messageContainer.scrollTop = messageContainer.scrollHeight;

    const loadingMessage = showLoadingMessage();
    messageContainer.appendChild(loadingMessage);

    setTimeout(() => {
        const umidade = Math.floor(Math.random() * 100);

        const receivedMessage = document.createElement('div');
        receivedMessage.classList.add('message', 'received', 'fade-in');
        receivedMessage.textContent = `A umidade atual é ${umidade}%`;

        messageContainer.replaceChild(receivedMessage, loadingMessage);
        messageContainer.scrollTop = messageContainer.scrollHeight;

        disableButtons(false);  // Reabilitar botões
    }, 2000);
}

function addMessageGrafico() {
    const messageContainer = document.getElementById('message-container');

    disableButtons(true);  // Desabilitar botões

    const sentMessage = document.createElement('div');
    sentMessage.classList.add('message', 'sent', 'fade-in');
    sentMessage.textContent = 'Exibindo gráfico...';
    messageContainer.appendChild(sentMessage);
    messageContainer.scrollTop = messageContainer.scrollHeight;

    const loadingMessage = showLoadingMessage();
    messageContainer.appendChild(loadingMessage);

    setTimeout(() => {
        const receivedMessage = document.createElement('div');
        receivedMessage.classList.add('message', 'received', 'fade-in');
        receivedMessage.textContent = 'Gráfico exibido com sucesso!';

        messageContainer.replaceChild(receivedMessage, loadingMessage);
        messageContainer.scrollTop = messageContainer.scrollHeight;

        disableButtons(false);  // Reabilitar botões
    }, 2000);
}