let inputCpf = document.getElementById("cpf"); 

inputCpf.addEventListener("input", function (){

    let valueCpf = this.value.replace(/[^\d]/g, '');

})