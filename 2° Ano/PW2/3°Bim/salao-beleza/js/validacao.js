// =============================================
// Elegance — UI própria + validação (sem Bootstrap)
// Blocos: menu mobile > modais > alertas >
//         confirmação de exclusão > validação do formulário.
// Ganchos vindos do HTML: [data-abrir-modal], [data-fechar-modal],
// [data-fechar-alerta], .js-excluir, #form-agendamento.
// =============================================

document.addEventListener('DOMContentLoaded', function () {

    // ---------- Menu mobile ----------
    // Hamburger (#menuToggle) alterna .aberto na lista (#navLinks)
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function () {
            const aberto = navLinks.classList.toggle('aberto');
            menuToggle.setAttribute('aria-expanded', aberto ? 'true' : 'false');
        });
        // Tocar num link fecha o painel (navegação concluída)
        navLinks.addEventListener('click', function (e) {
            if (e.target.closest('a')) navLinks.classList.remove('aberto');
        });
    }

    // ---------- Modais próprios ----------
    // Abrir = somar .aberto ao fundo + travar rolagem da página
    function abrirModal(id) {
        const backdrop = document.getElementById(id);
        if (!backdrop) return;
        backdrop.classList.add('aberto');
        backdrop.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function fecharModal(backdrop) {
        if (!backdrop) return;
        backdrop.classList.remove('aberto');
        backdrop.setAttribute('aria-hidden', 'true');
        // Em modo edição a URL tem ?editar=N: limpa para o modal
        // não reabrir sozinho num F5 (o PHP abre pelo ?editar=)
        if (backdrop.id === 'modalCadastro' && window.location.search.includes('editar=')) {
            window.history.replaceState({}, document.title, 'index.php');
        }
        // Só libera a rolagem quando nenhum modal restar aberto
        if (!document.querySelector('.modal-backdrop.aberto')) {
            document.body.style.overflow = '';
        }
    }

    // Qualquer [data-abrir-modal="idDoModal"] abre o modal correspondente
    document.querySelectorAll('[data-abrir-modal]').forEach(function (el) {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            abrirModal(el.getAttribute('data-abrir-modal'));
        });
    });

    // Fechar: botão [data-fechar-modal] ou clique fora da caixa (no fundo)
    document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
        backdrop.addEventListener('click', function (e) {
            if (e.target === backdrop) fecharModal(backdrop);
        });
        backdrop.querySelectorAll('[data-fechar-modal]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                fecharModal(backdrop);
            });
        });
    });

    // Tecla Esc fecha todos os modais abertos
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal-backdrop.aberto').forEach(fecharModal);
        }
    });

    // ---------- Alertas ----------
    // Botão × remove o aviso da tela na hora
    document.querySelectorAll('[data-fechar-alerta]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const alerta = btn.closest('.alert-zone') || btn.closest('.alert');
            if (alerta) alerta.remove();
        });
    });
    // Segurança: se o usuário ignorar, o aviso some sozinho após 6s
    const zona = document.querySelector('.alert-zone');
    if (zona) {
        setTimeout(function () {
            zona.style.transition = 'opacity .4s';
            zona.style.opacity = '0';
            setTimeout(function () { zona.remove(); }, 400);
        }, 6000);
    }

    // ---------- Confirmação de exclusão (modal próprio) ----------
    // Cada link .js-excluir carrega data-cliente; ao clicar, o modal
    // mostra o nome e o botão #excluirConfirmar aponta para o DELETE real
    const excluirNome = document.getElementById('excluirNome');
    const excluirConfirmar = document.getElementById('excluirConfirmar');

    document.querySelectorAll('.js-excluir').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault(); // segura a navegação até confirmar
            if (excluirNome) excluirNome.textContent = link.dataset.cliente || 'este cliente';
            if (excluirConfirmar) excluirConfirmar.href = link.href;
            abrirModal('modalExclusao');
        });
    });

    // ---------- Validação do formulário ----------
    // Roda no submit: testa cada campo por regex, marca .is-valid/
    // .is-invalid, escreve a dica em #feedback-<campo> e só envia se tudo ok
    const form = document.getElementById('form-agendamento');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // valida primeiro; o envio real é form.submit() no final

            // Tabela de regras: valor atual + regex + mensagem de erro
            const validar = {
                cliente:      { val: form.cliente.value.trim(),       regra: /^.{3,}$/,                        msg: 'Informe o nome do cliente (mín. 3 caracteres).' },
                telefone:     { val: form.telefone.value.trim(),      regra: /^\(?\d{2}\)?[\s.-]?\d{4,5}[\s.-]?\d{4}$/, msg: 'Informe um telefone válido. Ex: (11) 99999-9999.' },
                email:        { val: form.email.value.trim(),         regra: /^.{1,}@[\w\.-]+\.\w{2,}$/,       msg: 'O e-mail é obrigatório. Ex: nome@email.com' },
                servico:      { val: form.servico.value,              regra: /^.{2,}$/,                        msg: 'Selecione o serviço.' },
                profissional: { val: form.profissional.value,         regra: /^.{2,}$/,                        msg: 'Selecione o profissional.' },
                data:         { val: form.data.value,                 regra: /^\d{4}-\d{2}-\d{2}$/,           msg: 'Informe a data do agendamento.' },
                hora:         { val: form.hora.value,                 regra: /^\d{2}:\d{2}$/,                 msg: 'Informe o horário.' }
            };

            let valido = true;

            // Aplica cada regra e pinta o campo (verde navy OK / terracota erro)
            for (const campo in validar) {
                const item = validar[campo];
                const el   = form[campo];
                const feedback = document.getElementById('feedback-' + campo);

                const validoCampo = item.regra.test(item.val);

                if (validoCampo) {
                    el.classList.remove('is-invalid');
                    el.classList.add('is-valid');
                    if (feedback) feedback.textContent = '';
                } else {
                    valido = false;
                    el.classList.remove('is-valid');
                    el.classList.add('is-invalid');
                    if (feedback) feedback.textContent = item.msg;
                }
            }

            // Regra extra fora do regex: data não pode ser dia passado
            const hoje = new Date();
            hoje.setHours(0, 0, 0, 0);
            const dataAgendamento = new Date(form.data.value + 'T00:00:00');
            if (form.data.value && dataAgendamento < hoje) {
                valido = false;
                form.data.classList.remove('is-valid');
                form.data.classList.add('is-invalid');
                const fb = document.getElementById('feedback-data');
                if (fb) fb.textContent = 'A data não pode ser anterior ao dia atual.';
            }

            if (valido) {
                form.submit(); // tudo certo: envia de verdade ao PHP
            } else {
                // Foca o primeiro campo com erro (acessibilidade)
                const primeiroErro = form.querySelector('.is-invalid');
                if (primeiroErro) primeiroErro.focus();
            }
        });

        // Ao digitar/trocar valor, limpa o erro do campo (feedback imediato)
        form.addEventListener('input', function (e) {
            const campo = e.target;
            if (campo.classList && campo.classList.contains('is-invalid')) {
                campo.classList.remove('is-invalid');
                const fb = document.getElementById('feedback-' + campo.name);
                if (fb) fb.textContent = '';
            }
        });
        form.addEventListener('change', function (e) {
            // "change" cobre <select>, que nem sempre dispara "input"
            const campo = e.target;
            if (campo.classList && campo.classList.contains('is-invalid')) {
                campo.classList.remove('is-invalid');
                const fb = document.getElementById('feedback-' + campo.name);
                if (fb) fb.textContent = '';
            }
        });
    }
});

// Compat: mantém a função antiga caso algum link ainda a use
// (o fluxo atual usa o modal #modalExclusao em vez de confirm())
function confirmarExclusao() {
    return true;
}
