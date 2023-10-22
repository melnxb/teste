function enviar(){

    var arquivo = document.getElementById('arquivo').files;
    console.log(arquivo);

    var dados = new FormData();
    dados.append('arquivo', arquivo[0]);

    fetch("php/upload.php",{
        method: 'POST',
        body: dados
    });



}
/*

        <input type="file" id="arquivo" /> <br><br>

        <button onclick="enviar()"> Enviar </button>
*/