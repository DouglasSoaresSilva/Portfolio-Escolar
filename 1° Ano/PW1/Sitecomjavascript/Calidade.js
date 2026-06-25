function calcularIdade() {
    const anoAtual = 2025;
    const anoNascimentoInput = document.getElementById('anoNascimento');
    const resultadoDiv = document.getElementById('resultado');
    
    const anoNascimento = parseInt(anoNascimentoInput.value);
    
    // Validação
    if (!anoNascimento || anoNascimento < 1900 || anoNascimento > anoAtual) {
        resultadoDiv.textContent = 'Por favor, digite um ano de nascimento válido!';
        resultadoDiv.className = 'resultado error';
        return;
    }
    
    const idade = anoAtual - anoNascimento;
    
    resultadoDiv.textContent = `Sua idade é: ${idade} anos`;
    resultadoDiv.className = 'resultado success';
    
    // Esse treco limpa o campo
    anoNascimentoInput.value = '';
}