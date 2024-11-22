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

    // Fazer a requisição para a API que retorna a última temperatura
    fetch("/api/ultima-temperatura")
        .then(response => response.json())
        .then(data => {
            const receivedMessage = document.createElement('div');
            receivedMessage.classList.add('message', 'received', 'fade-in');
            receivedMessage.textContent = `A temperatura atual é ${data.temperatura}°C`;

            messageContainer.replaceChild(receivedMessage, loadingMessage);
            messageContainer.scrollTop = messageContainer.scrollHeight;

            disableButtons(false);  // Reabilitar botões
        })
        .catch(error => {
            console.error("Erro ao obter temperatura:", error);

            const errorMessage = document.createElement('div');
            errorMessage.classList.add('message', 'received', 'fade-in');
            errorMessage.textContent = "Erro ao obter a temperatura.";

            messageContainer.replaceChild(errorMessage, loadingMessage);
            messageContainer.scrollTop = messageContainer.scrollHeight;

            disableButtons(false);  // Reabilitar botões
        });
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

    // Fazer a requisição para a API que retorna a última umidade
    fetch("/api/ultima-umidade")
        .then(response => response.json())
        .then(data => {
            const receivedMessage = document.createElement('div');
            receivedMessage.classList.add('message', 'received', 'fade-in');
        receivedMessage.textContent = `A umidade atual é ${data.umidade}%`;

            messageContainer.replaceChild(receivedMessage, loadingMessage);
            messageContainer.scrollTop = messageContainer.scrollHeight;

            disableButtons(false);  // Reabilitar botões
        })
        .catch(error => {
            console.error("Erro ao obter umidade:", error);

            const errorMessage = document.createElement('div');
            errorMessage.classList.add('message', 'received', 'fade-in');
            errorMessage.textContent = "Erro ao obter a umidade.";

            messageContainer.replaceChild(errorMessage, loadingMessage);
            messageContainer.scrollTop = messageContainer.scrollHeight;

            disableButtons(false);  // Reabilitar botões
        });
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
        // Remover a mensagem de carregamento
        messageContainer.removeChild(loadingMessage);

        // Criar o iframe com o link do Grafana
        const graficoIframe = document.createElement('iframe');
        graficoIframe.src = "http://localhost:3000/d-solo/be11xdrgidy4gb/tcc?orgId=1&from=1728374541000&to=1728375621000&panelId=1"; // Substitua pelo link do Grafana
        graficoIframe.width = "100%";
        graficoIframe.height = "300";
        graficoIframe.frameBorder = "0";

        // Inserir o iframe na mensagem de recebimento
        const receivedMessage = document.createElement('div');
        receivedMessage.classList.add('message', 'received', 'fade-in');
        receivedMessage.appendChild(graficoIframe);

        messageContainer.appendChild(receivedMessage);
        messageContainer.scrollTop = messageContainer.scrollHeight;

        disableButtons(false);  // Reabilitar botões
    }, 2000);
}