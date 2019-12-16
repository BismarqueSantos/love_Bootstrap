document.querySelector("#salvarUsuario").addEventListener('click', cadastrarUsuario);

    function cadastrarUsuario(){
        var nome = document.getElementById('nome');
        var cpf = document.getElementById('cpf');
        var genero = document.getElementById('genero');
        var senha = document.getElementById('senha');
        var informacao = {"acao": "cadastrar", "nome": nome.value, "cpf": cpf.value, "genero": genero.value, "senha": senha.value};

        $.ajax({
            url: "./pg_home/BDusuario.php",
            type: "POST",
            data: {informacao_form: informacao},
            beforeSend: function(){
                console.log("enviando")
            },
            success: function(data){
                alert(data)
            },
            error: function(){
                alert("erro")
            },
        });
        nome.value ="";
        cpf.value ="";
        genero.value ="";
        senha.value ="";
}



document.querySelector("#salvarEstabelecimento").addEventListener('click', cadastrarEsta);

    function cadastrarEsta(){
        var nome_empresa = document.getElementById('nome_empresa');
        var cnpj = document.getElementById('cnpj');
        var segmento = document.getElementById('segmento');
        var senha = document.getElementById('senha');
        var informacao = {"acao": "cadastrar", "nome_empresa": nome_empresa.value, "cnpj": cnpj.value, "segmento": segmento.value, "senha": senha.value};

        $.ajax({
            url: "./pg_home/BDestabelecimento.php",
            type: "POST",
            data: {informacao_form: informacao},
            beforeSend: function(){
                console.log("enviando")
            },
            success: function(data){
                alert(data)
            },
            error: function(){
                alert("erro")
            },
        });
        nome_empresa.value ="";
        cnpj.value ="";
        segmento.value ="";
        senha.value ="";
}