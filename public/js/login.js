document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("login-form");

    form.addEventListener("submit", (event) => {
        event.preventDefault();  // Impede o envio do formulário para simular uma animação
        const submitButton = document.querySelector(".submit-button");
        
        submitButton.classList.add("loading");

        setTimeout(() => {
            submitButton.classList.remove("loading");
            alert("Login realizado com sucesso!");  // Simula uma resposta bem-sucedida
            form.reset();  // Limpa o formulário após a simulação do login
        }, 2000);
    });
});