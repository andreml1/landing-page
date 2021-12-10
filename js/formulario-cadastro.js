var botaoAdicionar = document.querySelector("#adicionar-candidato");
botaoAdicionar.addEventListener("click", function(event) {
    event.preventDefault();

    var form = document.querySelector("#form-adiciona");   
    var candidato = obtemCandidato(form);

    var erros = validaCandidato(candidato);
    if (erros.length > 0) {
        exibeMensagensDeErro(erros);
        return;
    }

    form.reset();
    
    var mensagensErro = document.querySelector("#mensagens-erro");
    mensagensErro.innerHTML = "";
    
}) 

function obtemCandidato(form) {
    var candidato = {
        nome: form.nome.value,
        email: form.email.value,
        telefone: form.telefone.value,
        
    }

    return candidato;
}

function validaCandidato(candidato) {

    var erros = [];

    if (candidato.nome.length == 0 || candidato.nome.length < 3) {
        erros.push("Nome inválido!");
    }

    if (candidato.email.length == 0 || candidato.email.search("@") == -1 || candidato.email.indexOf(".") == -1 ) {
        erros.push("E-mail inválido!");
    }

    
    if (candidato.telefone.length == 0 || candidato.telefone.length < 9) {
        erros.push("Telefone inválido!");
    }

    return erros;

}

function exibeMensagensDeErro(erros) {
    var ul = document.querySelector("#mensagens-erro");
    ul.innerHTML = "";

    erros.forEach(function(erro) {
        var li = document.createElement("li");
        li.textContent = erro;
        ul.appendChild(li);
    })
}
