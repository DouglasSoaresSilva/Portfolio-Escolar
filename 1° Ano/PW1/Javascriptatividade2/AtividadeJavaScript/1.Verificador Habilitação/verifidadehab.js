const readline = require("readline");

function podeDirigir(idade) {
    if (idade >= 18) {
        return "Pode ser habilitado(a)";
    } else {
        return "Ainda não pode";
    }
}

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question("Digite sua idade: ", function (resposta) {
  let idade = Number(resposta);

  console.log(podeDirigir(idade));
  rl.close();
});
