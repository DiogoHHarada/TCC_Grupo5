document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("perfil-form");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("toggle-password");


    togglePassword.addEventListener("click", () => {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);

        // Alterne a imagem do ícone de visibilidade da senha
        if (type === "password") {
            togglePassword.setAttribute("src", "/img/show_password_icon.png");
        } else {
            togglePassword.setAttribute("src", "/img/hide_password_icon.png");
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

            if (passwordInput.value === passwordconfInput.value) {


                const submitButton = document.querySelector(".submit-button");

                submitButton.classList.add("loading");

                setTimeout(() => {
                    submitButton.classList.remove("loading");
                    alert("Cadastro realizado com sucesso!");  // Simula uma resposta bem-sucedida
                    form.reset();  // Limpa o formulário após a simulação do login
                }, 2000);
            }
            else{
                console.log("Erro1")
            }

        }
        else{
            console.log("Erro2")
        }

    });
});

document.addEventListener('mousemove', function (e) {
    if (e.buttons !== 1) return; //Só cria rastros quando o botão do mouse estiver pressionado (talvez removemos isso, depende do Bikas)

    const trail = document.createElement('div');
    trail.className = 'trail'; //traços
    trail.style.left = `${e.pageX}px`;
    trail.style.top = `${e.pageY}px`;
    document.body.appendChild(trail);



    setTimeout(() => {
        trail.remove();
    }, 2500); //Remove o rastro após 2.5 segundos
});