var campoInput = document.querySelector("#pesquisa");
campoInput.addEventListener("input", function(){
    console.log(campoInput.value);

    var usuarios = document.querySelectorAll("#usuarios");

    if (campoInput.value.length > 0) { //// verifica se o campo de filtro tem o comprimento maior de 0 caracteres

        for(let i = 0; i < usuarios.length; i++) {

            var usuario = usuarios[i];
            var nome = usuario.textContent;
            var linhas = document.querySelectorAll("#linha");
            var linha = linhas[i];
            var expressao = new RegExp(campoInput.value, "i");

            if (!expressao.test(nome)) { /// expressao.test -> metodo de uma ExRegular q retorna boolean
                
                linha.classList.add("hide");
            } else {
                linha.classList.remove("hide");
            }
        }
    } else {
        for(let i = 0; i < usuarios.length; i++) {
            var linhas = document.querySelectorAll("#linha");
            var linha = linhas[i];
            linha.classList.remove("hide");
        }
    }
});