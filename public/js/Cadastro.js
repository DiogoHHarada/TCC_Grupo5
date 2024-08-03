document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("cadastro-form");
    const emailInput = document.getElementById("email");
    const emailrecInput = document.getElementById("emailrec");
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("toggle-password");
    const passwordconfInput = document.getElementById("passwordconf");
    const togglePasswordconf = document.getElementById("toggle-passwordconf");

    togglePassword.addEventListener("click", () => {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);

        // Alterne a imagem do ícone de visibilidade da senha
        if (type === "password") {
            togglePassword.setAttribute("src", "/img/show_password_icon.png");
        } else {
            togglePassword.setAttribute("src", "img/hide_password_icon.png");
        }
    });

    togglePasswordconf.addEventListener("click", () => {
        const type = passwordconfInput.getAttribute("type") === "password" ? "text" : "password";
        passwordconfInput.setAttribute("type", type);

        // Alterne a imagem do ícone de visibilidade da senha
        if (type === "password") {
            togglePasswordconf.setAttribute("src", "/img/show_password_icon.png");
        } else {
            togglePasswordconf.setAttribute("src", "/img/hide_password_icon.png");
        }
    });

    form.addEventListener("submit", (event) => {
        if (emailrecInput != null && emailInput != null && passwordInput != null && passwordconfInput != null) {
            if (passwordInput.value !== passwordconfInput.value) {
                event.preventDefault();  // Impede o envio do formulário se as senhas não coincidem
                alert("As senhas não coincidem. Por favor, verifique e tente novamente.");
            }
        } else {
            event.preventDefault();  // Impede o envio do formulário se algum campo estiver faltando
            alert("Todos os campos são obrigatórios. Por favor, preencha todos os campos.");
        }
    });
});
