/**
 * Lista de Exercícios - Aulas 4 a 10
 * JavaScript para navegação entre os exercícios
 */

function mostrarExercicio(numero) {
    // Esconde todos os exercícios
    const exercicios = document.querySelectorAll('.exercicio');
    exercicios.forEach(function(ex) {
        ex.style.display = 'none';
    });

    // Mostra o exercício selecionado
    const exercicio = document.getElementById('ex' + numero);
    if (exercicio) {
        exercicio.style.display = 'block';
    }

    // Atualiza o botão ativo
    const botoes = document.querySelectorAll('.btn-ex');
    botoes.forEach(function(btn) {
        btn.classList.remove('ativo');
    });

    const botaoAtivo = document.querySelector('.btn-ex[data-ex="' + numero + '"]');
    if (botaoAtivo) {
        botaoAtivo.classList.add('ativo');
    }

    // Scroll suave até o topo do conteúdo
    const conteudo = document.querySelector('.conteudo');
    if (conteudo) {
        conteudo.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Mostra o primeiro exercício ao carregar a página (se nenhum estiver ativo)
document.addEventListener('DOMContentLoaded', function() {
    const algumAtivo = document.querySelector('.exercicio[style*="block"]');
    if (!algumAtivo) {
        mostrarExercicio(1);
    }
});