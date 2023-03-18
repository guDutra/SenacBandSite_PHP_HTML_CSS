var botao = document.querySelector("#botaoEntrar");
botao.addEventListener("click", function(event) {


    event.preventDefault();
    var formulario = document.querySelector("#entrarForm");



});//// fim do actionListener do botao

function pegaInfoForm(formulario) {
    
    var usuario = {

        nome:  formulario.nome.value,
        senha: formulario.senha.value
 
    }
    return usuario;
}

function validação(usuario) {

    var usuarioDigitado = usuario.nome.value;
    var senhaDigitada = usuario.senha.value;

     
}


