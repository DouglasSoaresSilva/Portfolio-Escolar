const readline = require("readline");

function nomeDoDia(numero) {
  switch (numero) {
    case 1:
      return "Domingo";
    case 2:
      return "Segunda";
    case 3:
      return "Terça";
    case 4:
      return "Quarta";
    case 5:
      return "Quinta";
    case 6:
      return "Sexta";
    case 7:
      return "Sábado";
    default:
      return "Número inválido";
  }
}

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question("Digite um número de 1 a 7: ", function (resposta) {
  let numeroDigitado = Number(resposta);

  console.log(nomeDoDia(numeroDigitado));
  rl.close();
});
