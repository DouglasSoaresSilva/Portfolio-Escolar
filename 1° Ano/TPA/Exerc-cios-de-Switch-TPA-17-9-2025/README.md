# Exercícios-de-Switch-TPA
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
</head>
<body>
  <h1>Explicação dos exercícios do repositório "Exercícios de Switch - TPA"</h1>

  <p>Resumo: cada programa ilustra o uso da estrutura <code>switch</code> em Java. Abaixo está a descrição de cada arquivo e a função de seus trechos principais.</p>

  <h2>1. Bilhete</h2>
  <p><strong>Entrada:</strong> inteiro representando o tipo de bilhete (ex.: 1, 2, 3).<br>
  <strong>Função:</strong> lê a opção com <code>Scanner</code>, usa <code>switch(opcao)</code> para determinar qual mensagem ou preço imprimir. Cada <code>case</code> trata um tipo de bilhete; o <code>default</code> lida com opções inválidas.</p>
<img width="447" height="247" alt="image" src="https://github.com/user-attachments/assets/7178e456-472c-46a4-b229-f54c31491f68" />
<br>
  <h2>2. ClassificadorFaixaEtaria</h2>
  <p><strong>Entrada:</strong> idade (inteiro).<br>
  <strong>Função:</strong> valida a idade (não negativa), define a categoria (criança, adolescente, adulto, idoso) — possivelmente por intervalos — e usa <code>switch</code> sobre essa categoria para imprimir a classificação. O programa pode usar condicionais antes do <code>switch</code> para mapear a idade à categoria.</p>
<img width="410" height="118" alt="image" src="https://github.com/user-attachments/assets/9e3abf78-cf51-413f-8d02-980b636418fa" />

<br>
  <h2>3. Frutas</h2>
  <p><strong>Entrada:</strong> nome da fruta (string).<br>
  <strong>Função:</strong> aplica <code>fruta.toLowerCase()</code> e faz <code>switch</code> sobre a string para mostrar preço, descrição ou disponibilidade para cada fruta conhecida. Há um <code>default</code> para fruta não cadastrada.</p>
<img width="423" height="131" alt="image" src="https://github.com/user-attachments/assets/1b82d9bb-5a64-473f-b975-eca6ef73d4e9" />
<br>
  <h2>4. JogosSwitch</h2>
  <p><strong>Entrada:</strong> número do menu que representa um jogo.<br>
  <strong>Função:</strong> exibe um menu (1, 2, ...), usa <code>switch</code> para imprimir o nome/descrição do jogo escolhido ou chamar a função que o inicia. Geralmente há um loop para permitir repetir escolhas e uma opção para sair.</p>
<img width="594" height="134" alt="image" src="https://github.com/user-attachments/assets/c395b3c7-faf8-45fb-912b-b9f4bf8ca115" />
  <h2>5. SimuladorBanco</h2>
  <p><strong>Entrada/Estado:</strong> saldo (double) e opções de menu.<br>
  <strong>Função:</strong> dentro de um laço (<code>do/while</code> ou <code>while</code>) exibe opções: depositar, sacar, ver saldo, sair. O <code>switch</code> trata cada ação:
    <ul>
      <li><strong>case 1:</strong> ler valor e somar ao saldo (depósito).</li>
      <li><strong>case 2:</strong> ler valor, verificar saldo e subtrair (saque) ou informar saldo insuficiente.</li>
      <li><strong>case 3:</strong> imprimir saldo atual.</li>
      <li><strong>default:</strong> opção inválida.</li>
    </ul>
  Ao escolher sair, o laço termina e o programa encerra.</p>
<img width="403" height="188" alt="image" src="https://github.com/user-attachments/assets/ae79ad11-4b73-4edc-be04-9f7b54e7a8f7" />
<img width="405" height="197" alt="image" src="https://github.com/user-attachments/assets/15917a6a-09da-41d4-af39-dd807ddc1a04" />
<img width="398" height="205" alt="image" src="https://github.com/user-attachments/assets/3560133f-ce0e-4ad8-8a6d-dab40bb4fcb9" />
<img width="410" height="187" alt="image" src="https://github.com/user-attachments/assets/606320d5-3195-4bbf-a13f-40924bf31503" />


<br>
  <h2>6. SwitchSemana</h2>
  <p><strong>Entrada:</strong> número de 1 a 7.<br>
  <strong>Função:</strong> <code>switch(numero)</code> mapeia para os dias da semana: 1→Domingo, 2→Segunda, ... 7→Sábado. <code>default</code> para valores fora do intervalo.</p>

  <h2>Padrões comuns</h2>
  <ul>
    <li>Uso de <code>Scanner</code> para ler dados do usuário.</li>
    <li>Menus simples com opções númericas ou strings.</li>
    <li><code>switch</code> para direcionar o fluxo conforme a entrada.</li>
    <li><code>default</code> para validar entradas inválidas.</li>
    <li>Em programas interativos, uso de laços para repetir operações até o usuário sair.</li>
  </ul>
  <img width="429" height="124" alt="image" src="https://github.com/user-attachments/assets/f314c88d-4084-40ca-92b8-44b54e076d51" />
</body>
</html>
