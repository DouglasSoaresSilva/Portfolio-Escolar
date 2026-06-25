const readline = require("readline");

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

// Função clear
function gerarNomeCompleto(pessoa) {
  return pessoa.primeiroNome + " " + pessoa.sobrenome;
}

rl.question("Qual o primeiro nome? ", function (primeiroNome) {

  rl.question("Qual o sobrenome? ", function (sobrenome) {

    const pessoa = {
      primeiroNome: primeiroNome,
      sobrenome: sobrenome
    };

    console.log("Nome completo: " + gerarNomeCompleto(pessoa));

    rl.close();
  });
});
