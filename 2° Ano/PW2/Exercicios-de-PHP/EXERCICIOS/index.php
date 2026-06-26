<?php
$resultado = '';
$exercicio_ativo = '';

// Processa o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $exercicio_ativo = $_POST['exercicio'] ?? '';

    switch ($exercicio_ativo) {
        // 1) Tabuada
        case '1':
            $num = intval($_POST['num1'] ?? 0);
            $resultado = "<h3>Tabuada do $num</h3><table class='tabuada'>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado .= "<tr><td>$num x $i</td><td>=</td><td>" . ($num * $i) . "</td></tr>";
            }
            $resultado .= "</table>";
            break;

        // 2) Desconto
        case '2':
            $preco = floatval($_POST['preco'] ?? 0);
            $porcentagem = floatval($_POST['porcentagem'] ?? 0);
            $desconto = $preco * ($porcentagem / 100);
            $final = $preco - $desconto;
            $resultado = "<h3>Resultado do Desconto</h3>";
            $resultado .= "<p>Preço original: <strong>R$ " . number_format($preco, 2, ',', '.') . "</strong></p>";
            $resultado .= "<p>Desconto ($porcentagem%): <strong>R$ " . number_format($desconto, 2, ',', '.') . "</strong></p>";
            $resultado .= "<p>Preço final: <strong>R$ " . number_format($final, 2, ',', '.') . "</strong></p>";
            break;

        // 3) Aprovação
        case '3':
            $notas = array_map('floatval', [$_POST['n1'] ?? 0, $_POST['n2'] ?? 0, $_POST['n3'] ?? 0, $_POST['n4'] ?? 0]);
            $valida = true;
            foreach ($notas as $n) {
                if ($n < 1 || $n > 10) { $valida = false; break; }
            }
            if (!$valida) {
                $resultado = "<p class='erro'>As notas devem estar entre 1 e 10!</p>";
            } else {
                $media = array_sum($notas) / 4;
                $status = $media >= 5 ? "Aprovado" : "Reprovado";
                $resultado = "<h3>Resultado</h3>";
                $resultado .= "<p>Notas: " . implode(' - ', $notas) . "</p>";
                $resultado .= "<p>Média: <strong>" . number_format($media, 2) . "</strong></p>";
                $resultado .= "<p>Situação: <strong class='" . ($status === 'Aprovado' ? 'aprovado' : 'reprovado') . "'>$status</strong></p>";
            }
            break;

        // 5) Soma dos quadrados
        case '5':
            $nums = [intval($_POST['sq1'] ?? 0), intval($_POST['sq2'] ?? 0), intval($_POST['sq3'] ?? 0)];
            $quadrados = array_map(function($v) { return $v * $v; }, $nums);
            $soma = array_sum($quadrados);
            $resultado = "<h3>Soma dos Quadrados</h3>";
            $resultado .= "<p>{$nums[0]}² + {$nums[1]}² + {$nums[2]}² = $soma</p>";
            break;

        // 6) Salário líquido
        case '6':
            $bruto = floatval($_POST['salario'] ?? 0);
            $gratificacao = $bruto * 0.10;
            $com_gratificacao = $bruto + $gratificacao;
            $imposto = $com_gratificacao * 0.20;
            $liquido = $com_gratificacao - $imposto;
            $resultado = "<h3>Cálculo do Salário Líquido</h3>";
            $resultado .= "<p>Salário Bruto: <strong>R$ " . number_format($bruto, 2, ',', '.') . "</strong></p>";
            $resultado .= "<p>Gratificação (10%): <strong>R$ " . number_format($gratificacao, 2, ',', '.') . "</strong></p>";
            $resultado .= "<p>Imposto de Renda (20%): <strong>R$ " . number_format($imposto, 2, ',', '.') . "</strong></p>";
            $resultado .= "<p>Salário Líquido: <strong>R$ " . number_format($liquido, 2, ',', '.') . "</strong></p>";
            break;

        // 7) Média com descrição
        case '7':
            $notas7 = array_map('floatval', [$_POST['m1'] ?? 0, $_POST['m2'] ?? 0, $_POST['m3'] ?? 0, $_POST['m4'] ?? 0]);
            $media7 = array_sum($notas7) / 4;
            if ($media7 >= 6) $desc = "Aprovado";
            elseif ($media7 < 3) $desc = "Retido";
            else $desc = "Exame";
            $resultado = "<h3>Resultado</h3>";
            $resultado .= "<p>Média Aritmética: <strong>" . number_format($media7, 2) . "</strong></p>";
            $resultado .= "<p>Situação: <strong class='" . strtolower($desc) . "'>$desc</strong></p>";
            break;

        // 8) Maior e menor
        case '8':
            $nums8 = [intval($_POST['x1'] ?? 0), intval($_POST['x2'] ?? 0), intval($_POST['x3'] ?? 0)];
            $maior = max($nums8);
            $menor = min($nums8);
            $resultado = "<h3>Maior e Menor Número</h3>";
            $resultado .= "<p>Números: " . implode(', ', $nums8) . "</p>";
            $resultado .= "<p>Maior: <strong>$maior</strong></p>";
            $resultado .= "<p>Menor: <strong>$menor</strong></p>";
            break;

        // 9) Soma dos ímpares
        case '9':
            $ini = intval($_POST['inicio'] ?? 0);
            $fim = intval($_POST['fim'] ?? 0);
            $soma9 = 0;
            $impares = [];
            for ($i = $ini; $i <= $fim; $i++) {
                if ($i % 2 !== 0) { $soma9 += $i; $impares[] = $i; }
            }
            $resultado = "<h3>Soma dos Ímpares</h3>";
            $resultado .= "<p>Intervalo: $ini a $fim</p>";
            $resultado .= "<p>Ímpares: " . implode(', ', $impares) . "</p>";
            $resultado .= "<p>Soma: <strong>$soma9</strong></p>";
            break;

        // 10) Par ou Ímpar
        case '10':
            $num10 = intval($_POST['parimpar'] ?? 0);
            $tipo = ($num10 % 2 === 0) ? "PAR" : "ÍMPAR";
            $resultado = "<h3>Par ou Ímpar</h3>";
            $resultado .= "<p>O número <strong>$num10</strong> é <strong class='" . strtolower($tipo) . "'>$tipo</strong></p>";
            break;

        // 11) Calculadora
        case '11':
            $val1 = floatval($_POST['val1'] ?? 0);
            $val2 = floatval($_POST['val2'] ?? 0);
            $op = $_POST['operador'] ?? '+';
            $calc = '';
            switch ($op) {
                case '+': $calc = $val1 + $val2; break;
                case '-': $calc = $val1 - $val2; break;
                case '*': $calc = $val1 * $val2; break;
                case '/':
                    if ($val2 == 0) {
                        $resultado = "<p class='erro'>Divisão por zero não permitida!</p>";
                        break 2;
                    }
                    $calc = $val1 / $val2;
                    break;
            }
            $resultado = "<h3>Calculadora</h3>";
            $resultado .= "<p>$val1 $op $val2 = <strong>$calc</strong></p>";
            break;

    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios - Aulas 4 a 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>📚 Lista de Exercícios</h1>
            <p>Aulas 4 a 10 — 10 Exercícios</p>
        </header>

        <?php $exercicios = [1, 2, 3, 5, 6, 7, 8, 9, 10, 11]; ?>

        <nav class="menu-exercicios">
            <?php foreach ($exercicios as $i): ?>
                <button class="btn-ex" data-ex="<?= $i ?>" onclick="mostrarExercicio(<?= $i ?>)"><?= $i ?></button>
            <?php endforeach; ?>
        </nav>

        <div class="conteudo">
            <!-- Cada exercício -->
            <?php foreach ($exercicios as $i): ?>
            <div class="exercicio" id="ex<?= $i ?>" style="display:none;">
                <form method="POST">
                    <input type="hidden" name="exercicio" value="<?= $i ?>">

                    <?php if ($i === 1): ?>
                        <h2>1) Tabuada</h2>
                        <p>Digite um número para ver sua tabuada:</p>
                        <label>Número: <input type="number" name="num1" min="1" max="100" required></label>

                    <?php elseif ($i === 2): ?>
                        <h2>2) Calcular Desconto</h2>
                        <label>Preço (R$): <input type="number" name="preco" step="0.01" min="0" required></label>
                        <label>Desconto (%): <input type="number" name="porcentagem" step="0.01" min="0" max="100" required></label>

                    <?php elseif ($i === 3): ?>
                        <h2>3) Aprovação do Aluno</h2>
                        <p>Digite as 4 notas bimestrais (1 a 10):</p>
                        <div class="notas-grid">
                            <label>1º Bim: <input type="number" name="n1" min="1" max="10" step="0.1" required></label>
                            <label>2º Bim: <input type="number" name="n2" min="1" max="10" step="0.1" required></label>
                            <label>3º Bim: <input type="number" name="n3" min="1" max="10" step="0.1" required></label>
                            <label>4º Bim: <input type="number" name="n4" min="1" max="10" step="0.1" required></label>
                        </div>

                    <?php elseif ($i === 5): ?>
                        <h2>5) Soma dos Quadrados</h2>
                        <label>1º Número: <input type="number" name="sq1" required></label>
                        <label>2º Número: <input type="number" name="sq2" required></label>
                        <label>3º Número: <input type="number" name="sq3" required></label>

                    <?php elseif ($i === 6): ?>
                        <h2>6) Salário Líquido</h2>
                        <label>Salário Bruto (R$): <input type="number" name="salario" step="0.01" min="0" required></label>

                    <?php elseif ($i === 7): ?>
                        <h2>7) Média Aritmética</h2>
                        <p>Digite as 4 notas:</p>
                        <div class="notas-grid">
                            <label>1ª Nota: <input type="number" name="m1" step="0.1" required></label>
                            <label>2ª Nota: <input type="number" name="m2" step="0.1" required></label>
                            <label>3ª Nota: <input type="number" name="m3" step="0.1" required></label>
                            <label>4ª Nota: <input type="number" name="m4" step="0.1" required></label>
                        </div>

                    <?php elseif ($i === 8): ?>
                        <h2>8) Maior e Menor Número</h2>
                        <label>1º Número: <input type="number" name="x1" required></label>
                        <label>2º Número: <input type="number" name="x2" required></label>
                        <label>3º Número: <input type="number" name="x3" required></label>

                    <?php elseif ($i === 9): ?>
                        <h2>9) Soma dos Ímpares no Intervalo</h2>
                        <label>Valor inicial: <input type="number" name="inicio" required></label>
                        <label>Valor final: <input type="number" name="fim" required></label>

                    <?php elseif ($i === 10): ?>
                        <h2>10) Par ou Ímpar</h2>
                        <label>Digite um número: <input type="number" name="parimpar" required></label>

                    <?php elseif ($i === 11): ?>
                        <h2>11) Calculadora</h2>
                        <div class="calc-grid">
                            <label>1º Valor: <input type="number" name="val1" step="any" required></label>
                            <label>Operador:
                                <select name="operador" required>
                                    <option value="+">+ (soma)</option>
                                    <option value="-">- (subtração)</option>
                                    <option value="*">* (multiplicação)</option>
                                    <option value="/">/ (divisão)</option>
                                </select>
                            </label>
                            <label>2º Valor: <input type="number" name="val2" step="any" required></label>
                        </div>

                    <?php endif; ?>

                    <button type="submit" class="btn-calcular">Calcular</button>
                </form>

                <?php if ($exercicio_ativo == $i && $resultado): ?>
                    <div class="resultado"><?= $resultado ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <footer>
            <p>Desenvolvido para a disciplina — Atividade Avaliativa</p>
        </footer>
    </div>

    <script src="script.js"></script>
    <script>
        // Mostra o exercício ativo após submit
        <?php if ($exercicio_ativo): ?>
        document.addEventListener('DOMContentLoaded', function() {
            mostrarExercicio(<?= $exercicio_ativo ?>);
        });
        <?php endif; ?>
    </script>
</body>
</html>