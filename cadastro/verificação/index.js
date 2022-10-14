document.getElementById('btn').onclick = function valida_form() {
    if (document.getElementById("nomeCompleto").value.length < 2) {
        alert('Por favor, preencha o campo nome');
        document.getElementById("nomeCompleto").focus();
        return false
    }

    if (document.getElementById("endereco").value.length < 2) {
        alert('Por favor, preencha o campo endereço');
        document.getElementById("endereco").focus();
        return false
    }

    if (document.getElementById("bairro").value.length < 2) {
        alert('Por favor, preencha o campo bairro');
        document.getElementById("bairro").focus();
        return false
    }

    if (document.getElementById("cidade").value.length < 2) {
        alert('Por favor, preencha o campo cidade');
        document.getElementById("cidade").focus();
        return false
    }

    if (document.getElementById("estado").value.length == "") {
        alert('Por favor, preencha o campo estado');
        document.getElementById("estado").focus();
        return false
    }

    if (document.getElementById("cep").value.length < 2) {
        alert('Por favor, preencha o campo cep');
        document.getElementById("cep").focus();
        return false
    }

    if (document.getElementById("nasc").value.length == "") {
        alert('Por favor, preencha o campo nascimento');
        document.getElementById("nasc").focus();
        return false
    }

    if (document.getElementById("sexo").value.length == "") {
        alert('Por favor, preencha o campo sexo');
        document.getElementById("sexo").focus();
        return false
    }
    
}