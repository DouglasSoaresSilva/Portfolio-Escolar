// =============================================
// Validação de formulário (Agendamentos)
// =============================================

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-agendamento');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const validar = {
                cliente:      { val: form.cliente.value.trim(),       regra: /^.{3,}$/,                        msg: 'Informe o nome do cliente (mín. 3 caracteres).' },
                telefone:     { val: form.telefone.value.trim(),      regra: /^\(?\d{2}\)?[\s.-]?\d{4,5}[\s.-]?\d{4}$/, msg: 'Informe um telefone válido. Ex: (11) 99999-9999.' },
                email:        { val: form.email.value.trim(),         regra: /^[\w\.-]+@[\w\.-]+\.\w{2,}$/,   msg: 'Informe um e-mail válido. Ex: nome@email.com' },
                servico:      { val: form.servico.value,              regra: /^.{2,}$/,                        msg: 'Selecione o serviço.' },
                profissional: { val: form.profissional.value,         regra: /^.{2,}$/,                        msg: 'Selecione o profissional.' },
                data:         { val: form.data.value,                 regra: /^\d{4}-\d{2}-\d{2}$/,           msg: 'Informe a data do agendamento.' },
                hora:         { val: form.hora.value,                 regra: /^\d{2}:\d{2}$/,                 msg: 'Informe o horário.' }
            };

            let valido = true;

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

            // Validação adicional: data não pode ser no passado
            const hoje = new Date();
            hoje.setHours(0, 0, 0, 0);
            const dataAgendamento = new Date(form.data.value + 'T00:00:00');
            if (dataAgendamento < hoje) {
                valido = false;
                form.data.classList.remove('is-valid');
                form.data.classList.add('is-invalid');
                const fb = document.getElementById('feedback-data');
                if (fb) fb.textContent = 'A data não pode ser anterior ao dia atual.';
            }

            if (valido) {
                form.submit();
            }
        });

        // Limpa o estado de erro ao digitar
        form.addEventListener('input', function (e) {
            const campo = e.target;
            if (campo.classList.contains('is-invalid')) {
                campo.classList.remove('is-invalid');
                const fb = document.getElementById('feedback-' + campo.name);
                if (fb) fb.textContent = '';
            }
        });
    }
});

// Confirmação de exclusão
function confirmarExclusao(id) {
    return confirm('Tem certeza que deseja excluir este agendamento? Esta ação não pode ser desfeita.');
}