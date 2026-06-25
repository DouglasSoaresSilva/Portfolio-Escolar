function verificarParImpar() {
    const numeroInput = document.getElementById('numero');
    const resultadoDiv = document.getElementById('resultadoParImpar');
    
    const numero = parseInt(numeroInput.value);
    
    // Valida
    if (isNaN(numero)) {
        resultadoDiv.textContent = 'Por favor, digite um número válido!';
        resultadoDiv.className = 'resultado error';
        return;
    }
    
    // Verifica se o número é par ou ímpar
    if (numero % 2 === 0) {
        resultadoDiv.textContent = `O número ${numero} é PAR`;
        resultadoDiv.className = 'resultado success';
    } else {
        resultadoDiv.textContent = `O número ${numero} é ÍMPAR`;
        resultadoDiv.className = 'resultado info';
    }
    
    // Treco para limpar o campo
    numeroInput.value = '';
}