function logar(target) {
    showBox(target);
    var login = $('#login').val();
    var senha = $('#senha').val();
    if (login == '') {
        $(target).html("Digite o login.");
        hiddMsg(target, 3000);
    } else if (senha == '') {
        $(target).html("Digite a senha.");
        hiddMsg(target, 3000);
    } else {
        $dados = "acao=LOGAR&login=" + login + "&senha=" + senha;
        $pag = "ajax.php";
        $.ajax({
            type: "post",
            url: $pag,
            cache: false,
            data: $dados,
            dataType: 'text',
            success: function(retorno) {
                console.log(retorno);
                if (parseInt(retorno) == 1) {
                    $(target).html("Logado com sucesso.");
                    redUrl("painel.php", 3000);
                } else {
                    $(target).html("Ops! Algo deu errado. Tente mais tarde.");
                }
                hiddMsg(target, 3000);
            },
            beforeSend: function() {
                $(target).html("Validando...");
            }
        });
    }
}

function hiddMsg(target, t) {
    setTimeout(function() {
        $(target).fadeOut();
    }, t);
}

function showBox(target) {
    $(target).html("&nbsp;");
    $(target).fadeIn();
}

function redUrl(url, t) {
    setTimeout(function() {
        location = url;
    }, t);
}