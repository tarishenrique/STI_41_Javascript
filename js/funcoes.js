function validar(){
    checkAceito = document.formExemplo.checkAceito;

    if (checkAceito.checked == true){
        calcular();
    } else {
        alert("Você deve aceitar os termos de uso");
    }

}

function calcular(){
    txtNumero1 = document.formExemplo.txtNumero1;
    txtNumero2 = document.formExemplo.txtNumero2;

    a = txtNumero1.value;
    b = txtNumero2.value;

    resultado = parseFloat(a) + parseFloat(b);
    txtResultado = document.formExemplo.txtResultado;
    txtResultado.value = resultado;

    if (resultado < 0){
        txtResultado.style = "color:#FF0000; font-size:40px";
    }

}

function calcularTR(){
    a = document.getElementsByName("txtNumero1").value();
    b = document.getElementsByName("txtNumero2").value();
    resultado = a + b;

    
    document.getElementsByName(resultadoSoma).value = resultado;
}

function modificar(){
    //corpo = document.body;
    //corpo.style = "opacity:0";
    atencao = document.getElementById("atencao");
    atencao.innerHTML = "Atenção! Você realmente deseja remover?"

}